<script>
	 $(function () {
	     $('.container_marketplace').removeClass('hidden');
	 });
</script> //




	function bmp1() {
	  var x = document.getElementById(".container_marketplace");
	  if (x.style.display === "none") {
	    x.style.display = "block";
	  } else {
	    x.style.display = "none";
	  }
	}		

	function bmp2() {
	  var x = document.getElementByClassName("button_marketplace2");
	  if (x.style.display === "none") {
	    x.style.display = "block";
	  } else {
	    x.style.display = "none";
	  }
	}	

	function bmp3() {
	  var x = document.getElementByClassName("button_marketplace3");
	  if (x.style.display === "none") {
	    x.style.display = "block";
	  } else {
	    x.style.display = "none";
	  }
	}	

	function bmp4() {
	  var x = document.getElementByClassName("button_marketplace4");
	  if (x.style.display === "none") {
	    x.style.display = "block";
	  } else {
	    x.style.display = "none";
	  }
	}	

	function bmp5() {
	  var x = document.getElementByClassName("button_marketplace5");
	  if (x.style.display === "none") {
	    x.style.display = "block";
	  } else {
	    x.style.display = "none";
	  }
	}	








	<script>
		//first marketplace product page
		const targetDiv = document.getElementById("marketplace_page2_hidden");
		const btn = document.getElementById("bmp2toggle");
		btn.onclick = function () {
		  if (targetDiv.style.display !== "none") {
		    targetDiv.style.display = "none";
		  } else {
		    targetDiv.style.display = "block";
		  }
		};

		//second marketplace product page
		const targetDiv2 = document.getElementById("marketplace_page1_hidden");
		const btn2 = document.getElementById("bmp1toggle");
		btn2.onclick = function () {
		  if (targetDiv2.style.display !== "none") {
		    targetDiv2.style.display = "none";
		  } else {
		    targetDiv2.style.display = "block";
		  }
		};
	</script>






		//first marketplace product page
		function marketplacepage1(){
			const targetDiv = document.getElementById("marketplace_page2_hidden");
			const btn = document.getElementById("bmp1toggle");
			btn.onclick = function () {
			  if (targetDiv.style.display !== "none") {
			    targetDiv.style.display = "none";
			  } else {
			    targetDiv.style.display = "block";
			  }
			};
		}

		//second marketplace product page
		function marketplacepage2(){
			const targetDiv2 = document.getElementById("marketplace_page1_hidden");
			const btn2 = document.getElementById("bmp2toggle");
			btn2.onclick = function () {
			  if (targetDiv2.style.display !== "none") {
			    targetDiv2.style.display = "none";
			  } else {
			    targetDiv2.style.display = "block";
			  }
			};
		}