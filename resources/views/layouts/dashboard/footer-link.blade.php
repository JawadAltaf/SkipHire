   </div>
</div>
	<!--Wrapper End-->
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en"></script>
	<script src="{{ asset('assets/js/jquery.basictable.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sortable.js') }}"></script>
	<script src="{{ asset('assets/js/gmap3.js') }}"></script>
	<script src="{{ asset('assets/js/chart.js') }}"></script>
	<script src="{{ asset('assets/js/select2.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap-tagsinput.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>

	<script>
		const menu_icon = document.querySelector('.menu-icon');
		function addClassFunThree() {
	        this.classList.toggle("click-menu-icon");
	    }
	    menu_icon.addEventListener('click', addClassFunThree);
	    $('.wt-tablecategories').basictable({
		    breakpoint: 640,
		});
		var ctx = document.getElementById("wt-jobchart");
		var wt_jobchart = new Chart(ctx, {
		    type: 'bar',
		    data: {
		        labels: ["January", "February", "March", "April"],
		        datasets: [{
		            label: 'Total Earnings',
		            data: [ 6, 8, 4, 7, 10],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',
		                'rgba(75, 192, 192, 0.2)',
		                'rgba(153, 102, 255, 0.2)',
		                'rgba(255, 159, 64, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255,99,132,1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(75, 192, 192, 1)',
		                'rgba(153, 102, 255, 1)',
		                'rgba(255, 159, 64, 1)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true,
		                    fontSize:12,
		                    fontColor:'#767676'
		                }
		            }]
		        },
		        legend: {
		            labels: {
		                fontSize:14,
		                fontColor: '#767676',
		                FontFamily:'Open Sans',
		                
		            }
		        }
		    }
		});
		 menu_icon.addEventListener('click', addClassFunThree);
	    $('.wt-tablecategories').basictable({
		    breakpoint: 720,
		});
	

	</script>
</body>
</html>