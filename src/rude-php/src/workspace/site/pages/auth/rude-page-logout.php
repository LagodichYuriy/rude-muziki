<?

namespace rude;

class page_logout
{
	public static function init()
	{
		site::logout();
		?>
			<script>
				rude.crawler.repaint_site_menu();
				rude.crawler.open('?page=homepage');
			</script>
		<?
		//headers::redirect(RUDE_SITE_URL . site::url('homepage') . '&ajax=1');
	}
}