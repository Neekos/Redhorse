<footer>
	<div class="zerogrid">
		<div class="wrap-footer">
			<div class="row">
				<div class="col-1-2">
					<div class="wrap-col">

					</div>
				</div>
				<div class="col-1-2">
					<div class="wrap-col">
						<ul class="bottom-social f-right">
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/ksk_redhorse19/"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://vk.com/redhorse19"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
							<li><a href="https://vk.com/redhorse19"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a></li>
							
							
						</ul>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

   
<script src="/template/js/bootstrap.js"></script>



<!-- <script src="/template/js/lightbox-plus-jquery.min.js"></script> -->
<script type="text/javascript" src="/template/js/zapis.js"></script>
<script type="text/javascript">
    $(function() {
		if ($.browser.msie && $.browser.version.substr(0,1)<7)
		{
		$('li').has('ul').mouseover(function(){
			$(this).children('ul').css('visibility','visible');
			}).mouseout(function(){
			$(this).children('ul').css('visibility','hidden');
			})
		}

		/* Mobile */
		$("#menu-trigger").on("click", function(){
			$("#menu").slideToggle();
		});

		// iPad
		var isiPad = navigator.userAgent.match(/iPad/i) != null;
		if (isiPad) $('#menu ul').addClass('no-transition');      
    });          
</script>
    </div>
  </body>
</html>