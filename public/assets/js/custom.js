document.addEventListener("DOMContentLoaded", function () {
  // Add event listener for all cards with class 'category-select'
  document.querySelectorAll(".category-select").forEach((card) => {
    card.addEventListener("click", function () {
      // Remove 'active' class from all cards
      document.querySelectorAll(".category-select").forEach((innerCard) => {
        innerCard.classList.remove("active");
      });
      // Add 'active' class to clicked card
      this.classList.add("active");
      // Get category name from clicked card
      const categoryName = this.querySelector(".card-body").innerText;

      // Update hidden input field
      document.getElementById("category").value = categoryName;

      // Navigate to next tab (You can replace this with your actual navigation logic)
      // moveToNextTab();
    });
  });

  document.querySelectorAll(".experience-select").forEach((card) => {
    card.addEventListener("click", function () {
      // Remove 'active' class from all cards
      document.querySelectorAll(".experience-select").forEach((innerCard) => {
        innerCard.classList.remove("active");
      });
      // Add 'active' class to clicked card
      this.classList.add("active");
      // Get category name from clicked card
      const categoryName = this.querySelector(".card-body").innerText;

      // Update hidden input field
      document.getElementById("experience").value = categoryName;

      // Navigate to next tab (You can replace this with your actual navigation logic)
      // moveToNextTab();
    });
  });

  document.querySelectorAll(".appointment-select").forEach((card) => {
    card.addEventListener("click", function () {
      // Remove 'active' class from all cards
      document.querySelectorAll(".appointment-select").forEach((innerCard) => {
        innerCard.classList.remove("active");
      });
      // Add 'active' class to clicked card
      this.classList.add("active");
      // Get category name from clicked card
      const categoryName = this.querySelector(".card-body").innerText;

      // Update hidden input field
      document.getElementById("appointment").value = categoryName;

      // Navigate to next tab (You can replace this with your actual navigation logic)
      // moveToNextTab();
    });
  });

  document.querySelectorAll(".fees-select").forEach((card) => {
    card.addEventListener("click", function () {
      // Remove 'active' class from all cards
      document.querySelectorAll(".fees-select").forEach((innerCard) => {
        innerCard.classList.remove("active");
      });
      // Add 'active' class to clicked card
      this.classList.add("active");
      // Get category name from clicked card
      const categoryName = this.querySelector(".card-body").innerText;

      // Update hidden input field
      document.getElementById("fees").value = categoryName;

      // Navigate to next tab (You can replace this with your actual navigation logic)
      // moveToNextTab();
    });
  });

});
