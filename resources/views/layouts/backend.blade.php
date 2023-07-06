<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{asset('admin_assets/img/favicon-icon.ico')}}" sizes="32x32" type="image/png">
	<link rel="stylesheet" href="{{'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/jquery.dataTables.min.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/jquery.dropdown.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/main-style.css')}}" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<style type="text/css">
	 #cke_1_contents{height:60px !important;}	
	</style>
	
</head>
	
    @yield('before_body')
</head>
<body>
<div class="scrollToTop" id="backToTop"><a href="#backToTop"><i class="fa fa-angle-up"></i><span>TOP</span></a></div>

@include('aadhya.partial.header')
@yield('content')
<script type="text/javascript" src="{{asset('admin_assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin_assets/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin_assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin_assets/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="https://cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
<script type="text/javascript" src="{{asset('admin_assets/js/mock.js')}}"></script>
<script type="text/javascript" src="{{asset('admin_assets/js/jquery.dropdown.js')}}"></script>
<script type="text/javascript" src="{{asset('admin_assets/js/jquery.dropdown.js')}}"></script>
@yield('afterScript')
<script>
		jQuery(document).ready(function ($) {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 0) {
			$('#backToTop').fadeIn('slow');
		} else {
			$('#backToTop').fadeOut('slow');
		}
	});
	$('#backToTop').click(function () {
		$("html, body").animate({ scrollTop: 0 }, 500);
		return false;
	});
});

	</script>
<script>
	CKEDITOR.replace( 'editor1' );
	CKEDITOR.replace( 'editor2' );
	CKEDITOR.replace( 'editor3' );
	CKEDITOR.replace( 'editor4' );
	CKEDITOR.replace( 'editor5' );
	CKEDITOR.replace( 'editor6' );
</script>
<script>
$(document).ready( function () {
    $('#datatable').DataTable();
    $('.datatable').DataTable();
} );


</script>
<script>
	var defaultText = 'Enter Value';
	
	function endEdit(e) {
		var input = $(e.target),
		label = input && input.prev();
		
		label.text(input.val() === '' ? defaultText : input.val());
		input.hide();
		label.show();
	}
	
	$('.clickedit').hide()
	.focusout(endEdit)
	.keyup(function (e) {
		if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
			endEdit(e);
			return false;
			} else {
			return true;
		}
	})
	.prev().click(function () {
		$(this).hide();
		$(this).next().show().focus();
	});
</script>  
<script>
    var Random = Mock.Random;
    var json1 = Mock.mock({
      "data|10-50": [{
        name: function () {
          return Random.name(true)
        },
        "id|+1": 1,
        "disabled|1-2": true,
        groupName: 'Group Name',
        "groupId|1-4": 1,
        "selected": false
      }]
    });

    $('.dropdown-mul-1').dropdown({
      data: json1.data,
      limitCount: 40,
      multipleMode: 'label',
      choice: function () {
        // console.log(arguments,this);
      }
    });

    var json2 = Mock.mock({
      "data|10000-10000": [{
        name: function () {
          return Random.name(true)
        },
        "id|+1": 1,
        "disabled": false,
        groupName: 'Group Name',
        "groupId|1-4": 1,
        "selected": false
      }]
    });

    $('.dropdown-mul-2').dropdown({
      limitCount: 5,
      searchable: false
    });

    $('.dropdown-sin-1').dropdown({
      readOnly: true,
      input: '<input type="text" maxLength="20" placeholder="Search">'
    });

    $('.dropdown-sin-2').dropdown({
      data: json2.data,
      input: '<input type="text" maxLength="20" placeholder="Search">'
    });
  </script>


</body>
</html>