<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.html" ><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="{{ route('product.index') }}" class="{{ (request()->is('product')) ? 'active' : '' }}"><i class="lnr lnr-code"></i> <span>Data Product</span></a></li>
						<li><a href="{{ route('category.index') }}" class="{{ (request()->is('category')) ? 'active' : '' }}"><i class="lnr lnr-chart-bars"></i> <span>Category</span></a></li>
						<li><a href="{{ route('gallery.index') }}" class="{{ (request()->is('gallery')) ? 'active' : '' }}"><i class="lnr lnr-picture"></i> <span>Gallery Product</span></a></li>
						<li><a href="{{ route('transaction.index') }}" class="{{ (request()->is('transaction')) ? 'active' : '' }}"><i class="lnr lnr-license"></i> <span>Transaction</span></a></li>												
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->