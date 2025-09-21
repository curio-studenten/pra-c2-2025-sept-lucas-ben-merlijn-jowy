<footer class="site-footer" style="padding: 30px 20px; border-top:1px solid #ddd;">

    <div class="footer-grid" style="display:flex; flex-wrap:wrap; gap:20px; justify-content:space-between;">

        <div class="footer-block" style="flex:1; min-width:200px;">
            <h4>{{ __('footerMisc.about_us') }}</h4>
            <p>{{ __('footerMisc.info') }}</p>
        </div>

        <div class="footer-block" style="flex:1; min-width:200px;">
            <h4>Contact</h4>
            <p>{{ __('footerMisc.adress') }}</p>
            <p>{{ __('footerMisc.phone') }}</p>
            <p>{{ __('footerMisc.email') }}</p>
        </div>

        <div class="footer-block" style="flex:1; min-width:200px;">
            <h4>{{ __('footerMisc.follow') }}</h4>
            <p>
                <a href="">Facebook</a><br>
                <a href="">Twitter</a><br>
                <a href="">Instagram</a>
            </p>
        </div>
    </div>

    <div style="margin-top:20px; text-align:center;">
        © {{ __('misc.copyright') }}
    </div>
          
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-30506707-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>

    <script type="text/javascript"> 
     if (top.location != self.location) { 
      top.location = self.location.href;
     } 
    </script>

</footer>
