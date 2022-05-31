<div class="header" id="home">
	<div class="container">
		<ul>
			@if(Auth::check())
			<li class="text-center border-right text-white ">
			<a href="logout" title="Đăng Xuất"><i class="fas fa-user-friends"></i>{{ Auth::user()->name }}</a>
		     </li>
		     @else
		    <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Đăng nhập </a></li>
			<li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Đăng ký </a></li>
			@endif
			<li><i class="fa fa-phone" aria-hidden="true"></i> SĐT :0333235709 </li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">namton12a3@gmail.com</a></li>
		</ul>
	</div>
</div>



