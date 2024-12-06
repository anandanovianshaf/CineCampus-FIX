<div class="footer w-full bg-black flex flex-col md:flex-row justify-between items-center py-6 px-5 md:px-10 text-gray-400 text-sm">
    <div class="footer-links flex flex-col md:flex-row gap-4 md:gap-8 mb-4 md:mb-0">
        <a href="discuss.php?id=<?= isset($movie_id) ? $movie_id : 0    ; ?>" class="hover:text-white">DISCUSSION FORUM</a>
        <a href="ratings.php?id=<?= isset($movie_id) ? $movie_id : 0; ?>" class="hover:text-white">GIVE RATING</a>
        <a href="reviews.php?id=<?= isset($movie_id) ? $movie_id : 0; ?>" class="hover:text-white">GIVE REVIEW</a>
    </div>
</div>

