document.addEventListener("DOMContentLoaded", () => {
    const toggleBtn = document.getElementById("toggleBtn");
    const sidebar = document.querySelector(".sidebar");
  
    function setSidebarDefault() {
      if (window.innerWidth > 768) {
        sidebar.classList.add("active");
        document.body.classList.remove("sidebar-open");
      } else {
        sidebar.classList.remove("active");
        document.body.classList.remove("sidebar-open");
      }
    }
  
    setSidebarDefault();
    window.addEventListener("resize", setSidebarDefault);
  
    toggleBtn.addEventListener("click", () => {
      sidebar.classList.toggle("active");
      if (window.innerWidth <= 768) {
        if (sidebar.classList.contains("active")) {
          document.body.classList.add("sidebar-open");
        } else {
          document.body.classList.remove("sidebar-open");
        }
      }
    });
  });
  