<footer class="bg-neutral-100 dark:bg-slate-900">
  <div class="container py-16 flex flex-wrap">
    <div class="md:w-3/5 md:mr-auto flex-col md:col-auto">
      <span class="font-semibold mb-3 inline-block"><?php echo get_option('set_footer_heading'); ?></span>
      <div class="text-xs text-gray-500 leading-5">
        <p class="mb-3">
          <?php echo get_option('set_footer_text'); ?>
        </p>
        <p id="copyright" class="leading-5">&copy; <?php echo esc_html( date_i18n( __( 'Y', 'gabutpress' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ) .' - '. esc_html( get_bloginfo( 'description' ) ); ?></p>
      </div>
    </div>
    <div class="md:w-2/6 my-5 text-center md:text-right">
      <div class="sosmed mt-5">
        <?php function sosmed($url) {
          $opt = get_option('set_url_' . $url);
          $output = ($opt) ? $opt : '#' ;
          echo $output;
        } ?>
        <a class="leading-none p-2 text-2xl rounded bg-slate-800 hover:bg-neutral-700 text-white inline-block" href="<?php sosmed('instagram'); ?>"><span class="iconify" data-icon="ri:instagram-line"></span></a>
        <a class="leading-none p-2 text-2xl rounded bg-slate-800 hover:bg-neutral-700 text-white inline-block" href="<?php sosmed('facebook'); ?>"><span class="iconify" data-icon="ri:facebook-fill"></span></a>
        <a class="leading-none p-2 text-2xl rounded bg-slate-800 hover:bg-neutral-700 text-white inline-block" href="<?php sosmed('youtube'); ?>"><span class="iconify" data-icon="ri:youtube-line"></span></a>
        <a class="leading-none p-2 text-2xl rounded bg-slate-800 hover:bg-neutral-700 text-white inline-block" href="<?php sosmed('twitter'); ?>"><span class="iconify" data-icon="ri:twitter-line"></span></a>
        <a class="leading-none p-2 text-2xl rounded bg-slate-800 hover:bg-neutral-700 text-white inline-block" href="<?php sosmed('linkedin'); ?>"><span class="iconify" data-icon="ri:linkedin-fill"></span></a>
      </div>
    </div>
  </div>
</footer>

<script>
// Dark Mode
darkMode();
<?php if (get_option('set_theme_mode') == 'dark'): ?>
function darkMode() {
  const HTML = document.querySelector("html");
  const currentTheme = localStorage.getItem("themeMode");
  if (currentTheme == "light") {
    HTML.classList.toggle("light");
    HTML.classList.remove("dark");
  }

  function changeClass() {
    const darkmode = HTML.classList.contains("dark");
    switch (darkmode) {
      case true:
        HTML.classList.add("light");
        HTML.classList.remove("dark");
        localStorage.setItem("themeMode", "light");
        break;

      default:
        HTML.classList.add("dark");
        HTML.classList.remove("light");
        localStorage.setItem("themeMode", "dark");
        break;
    }
  }

  document.querySelector(".darkmode").addEventListener("click", changeClass);
}
<?php else: ?>
function darkMode() {
  const currentTheme = localStorage.getItem("themeMode");
  if (currentTheme == "dark") {
    document.querySelector("html").classList.toggle("dark");
  }
  
  document.querySelector(".darkmode").addEventListener("click", function () {
    document.querySelector("html").classList.toggle("dark");
    const theme = document.querySelector("html").classList.contains("dark") ? "dark" : "";
  
    localStorage.setItem("themeMode", theme);
  });
}
<?php endif; ?>
</script>

<?php wp_footer(); ?>
</body>
</html>