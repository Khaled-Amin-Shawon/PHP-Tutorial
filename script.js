document.addEventListener("DOMContentLoaded", () => {
    const toggleBtn = document.getElementById("toggleBtn");
    const sidebar = document.querySelector(".sidebar");
  
    toggleBtn.addEventListener("click", () => {
      sidebar.classList.toggle("active");
    });
  });
  