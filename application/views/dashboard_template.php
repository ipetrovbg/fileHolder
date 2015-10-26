<div id="container">
	
	<div id="user_section">
		<div class="user_wraper">
			<div id="user_section_pic"><img src="<?php echo URL ?>img/nav_user_pic.png" /></div>
			<div id="user_section_name"><span>Natasha Joe</span></div>
			<a href=""><div id="user_section_arrow_down"></div></a>
			<div class="cleared"></div>
		</div>

		<ul id="user_nav">
			<a href="#"><li><img src="<?php echo URL ?>/img/link.png"> My Files</li></a>
			<a href=""><li><img src="<?php echo URL ?>/img/add.png"> Add Files</li></a>
			<a href=""><li><img src="<?php echo URL ?>/img/favorites.png"> Favourites</li></a>
			<a href=""><li><img src="<?php echo URL ?>/img/deleted.png"> Deleted</li></a>
		</ul>

	</div>
	<div id="content">
	
		<div class="wraper_content">
			<div id="folders">
				<div class="main_title_folders">Folders:</div>
				<a href="1">
				<div class="folder">
					<div class="file_wrapper">
						<div class="folder_img"></div>
						<div class="title_folder"><span>New Folder</span></div>
					</div>
				</div>
				</a>
				<a href="2">
				<div class="folder">
					<div class="file_wrapper">
						<div class="folder_img"></div>
						<div class="title_folder"><span>Cooking</span></div>
					</div>
				</div>
				</a>
				<a href="3">
				<div class="folder">
					<div class="file_wrapper">
						<div class="folder_img"></div>
						<div class="title_folder"><span>My Pictures</span></div>
					</div>
				</div>
				</a>
				<div class="cleared"></div>
			</div>
			<div id="files">
				<div class="main_title_files">Files:</div>
				

				<?php
					foreach ($files as $value) {
						?>
						<a href="<?php echo URL.$value['file_dir']; ?>">
							<div class="file">
								<div class="file_wrapper">
									<div class="file_img"><img src="<?php echo URL ?>/img/types/doc.png" /></div>
									<div class="title_file"><span><?php echo $value['file_name'];?></span></div>
								</div>
							</div>
						</a>
						<?php
					}
				?>
				<div class="cleared"></div>
			</div>
		</div>		
		
	</div>
	<div class="cleared"></div>
</div>
