$.fn.sidebarMenu = function (options) {
  var opt = $.extend(
    {
      // Configuration options for the sidebar menu
      menuToggleBtn: ".sidebar-toggle-btn", // Button to toggle the sidebar
      sidebarClass: "sidebar-visible", // Class added when sidebar is visible
      subMenuClass: "sidebar-submenu", // Class for submenus
      subMenuParent: "has-submenu", // Class for menu items with submenus
      subMenuParentToggle: "submenu-open", // Class added to open submenu parents
      expandElement: '<span class="submenu-expand"></span>', // Element for expanding submenus
      subMenuToggleClass: "submenu-visible", // Class for visible submenus
      toggleSpeed: 400, // Speed of the submenu toggle
      bodyClass: "body-push-right" // Class added to push content aside when sidebar is visible
    },
    options
  );

  return this.each(function () {
    var sidebar = $(this); // Select sidebar

    // Toggle Sidebar Visibility
    function toggleSidebar() {
      sidebar.toggleClass(opt.sidebarClass); // Show or hide the sidebar
      $("body").toggleClass(opt.bodyClass); // Push content when sidebar opens
    }

    // Set up Submenus
    sidebar.find("li").each(function () {
      var submenu = $(this).find("ul");
      if (submenu.length > 0) {
        submenu.addClass(opt.subMenuClass); // Add class to submenu
        submenu.css("display", "none"); // Initially hide submenus
        $(this).addClass(opt.subMenuParent); // Mark parent li with class
        $(this).children("a").append(opt.expandElement); // Add expand icon
      }
    });

    // Toggle Submenu
    function toggleSubMenu($element) {
      var submenu = $element.next("ul");

      if (submenu.length > 0) {
        $element.parent().toggleClass(opt.subMenuParentToggle); // Toggle submenu parent class
        submenu.slideToggle(opt.toggleSpeed); // Slide toggle the submenu
        submenu.toggleClass(opt.subMenuToggleClass); // Toggle visible class
      }
    }

    // Handle submenu expand click
    sidebar.on("click", ".submenu-expand", function (e) {
      e.preventDefault();
      toggleSubMenu($(this).parent("a"));
    });

    // Toggle Sidebar on button click
    $(opt.menuToggleBtn).on("click", function (e) {
      e.preventDefault();
      toggleSidebar();
    });

    // Close sidebar if clicked outside
    $(document).on("click", function (e) {
      if (!$(e.target).closest(sidebar).length && !$(e.target).closest(opt.menuToggleBtn).length) {
        if (sidebar.hasClass(opt.sidebarClass)) {
          toggleSidebar(); // Hide the sidebar
        }
      }
    });

    // Prevent menu from closing on click inside
    sidebar.on("click", function (e) {
      e.stopPropagation();
    });
  });
};

// Initialize the sidebar menu
$(".sidebar-menu").sidebarMenu({
  menuToggleBtn: ".sidebar-toggle-btn"
});



$.fn.vsmobilemenu = function (options) {
  var opt = $.extend(
    {
      menuToggleBtn: ".vs-menu-toggle", // Toggle button for the menu
      bodyToggleClass: "vs-body-visible", // Class to control menu visibility
      subMenuClass: "sub-menu", // Submenu class
      subMenuParent: "menu-item-has-children", // Parent class for items with submenu
      subMenuParentToggle: "vs-active", // Active class for toggling
      meanExpandClass: "vs-mean-expand", // Class for the submenu toggle button
      appendElement: '<span class="vs-mean-expand"></span>', // Element to append for submenu expand icon
      subMenuToggleClass: "vs-open", // Class for open submenus
      toggleSpeed: 400, // Speed for opening/closing animations
    },
    options
  );

  return this.each(function () {
    var menu = $(this); // Select menu element

    // Menu Show & Hide
    function menuToggle() {
      menu.toggleClass(opt.bodyToggleClass); // Toggle menu visibility

      // Collapse all submenus when the menu is toggled (hidden or shown)
      var subMenu = "." + opt.subMenuClass;
      $(subMenu).each(function () {
        if ($(this).hasClass(opt.subMenuToggleClass)) {
          $(this).removeClass(opt.subMenuToggleClass);
          $(this).slideUp(opt.toggleSpeed); // Slide up all open submenus
          $(this).parent().removeClass(opt.subMenuParentToggle); // Remove active class from parent
        }
      });
    }

    // Set up each submenu
    menu.find("li." + opt.subMenuParent).each(function () {
      var submenu = $(this).find("ul");
      submenu.addClass(opt.subMenuClass); // Add submenu class to all submenus
      submenu.hide(); // Hide submenus by default
      submenu.parent().addClass(opt.subMenuParent); // Add parent class to items with submenu
      submenu.prev("a").append(opt.appendElement); // Append the toggle icon next to the parent link
    });

    // Toggle Submenu
    function toggleDropDown($element) {
      var submenu = $element.next("ul");

      // Toggle submenu visibility and active class
      if (submenu.length > 0) {
        submenu.slideToggle(opt.toggleSpeed); // Toggle submenu visibility with animation
        submenu.toggleClass(opt.subMenuToggleClass); // Toggle open class
        $element.parent().toggleClass(opt.subMenuParentToggle); // Toggle active class on parent
      }
    }

    // Submenu toggle event listener
    var expandToggler = "." + opt.meanExpandClass;
    menu.find(expandToggler).each(function () {
      $(this).on("click", function (e) {
        e.preventDefault(); // Prevent default anchor behavior
        toggleDropDown($(this).parent().find("a").first()); // Toggle the submenu for this item
      });
    });

    // Menu show & hide on toggle button click
    $(opt.menuToggleBtn).each(function () {
      $(this).on("click", function () {
        menuToggle(); // Toggle the menu visibility
      });
    });

    // Prevent menu from hiding when clicked inside
    menu.find("div").on("click", function (e) {
      e.stopPropagation();
    });
  });
};

// Initialize the mobile menu
$(".vs-menu-wrapper").vsmobilemenu();
