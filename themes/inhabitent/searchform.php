<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

		<a id="search-icon" class="icon-search" aria-hidden="true">
			<i class="fa fa-search"></i>
		</a>
		<label>
			<input type="search" id="search-field" class="search-field" placeholder="Type and hit enter..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		<button class="search-submit screen-reader-text">
			<span><?php echo esc_html( 'Search' ); ?></span>
		</button>
	
</form>
