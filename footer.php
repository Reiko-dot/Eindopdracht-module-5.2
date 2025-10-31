<footer>
    <p>&copy; 2025 Sanrio Website. All rights reserved.</p>





    <script>
document.addEventListener('DOMContentLoaded', function() {
  const cards = document.querySelectorAll('.character-card');

  cards.forEach(card => {
    const image = card.querySelector('.character-toggle');
    const modal = card.querySelector('.character-modal');

    if (image && modal) {
      // Show modal when image clicked
      image.addEventListener('click', () => {
        modal.style.display = 'flex';
      });

      // Hide modal when clicking outside the content
      modal.addEventListener('click', (e) => {
        if (e.target === modal) {
          modal.style.display = 'none';
        }
      });
    }
  });
});
</script>


</footer>