/**
 * EYEMAGINE - The leading Magento Solution Partner
 *
 * Layered Nav Limit
 *
 * @author    EYEMAGINE <magento@eyemaginetech.com>
 * @category  Eyemagine
 * @package   Eyemagine_LayeredNavLimit
 * @copyright Copyright (c) 2014 EYEMAGINE Technology, LLC (http://www.eyemaginetech.com)
 * @license   http://www.eyemaginetech.com/license.txt
 */
(function($) {
    $(document).ready(function() {
        $('.lnl-more, .lnl-less').click(function(e) {
            e.preventDefault();
            var clicked = $(this);
            clicked.parent().find('.lnl-more, .lnl-less').removeClass('lnl-hidden');
            clicked.addClass('lnl-hidden');
            clicked.parent().siblings('.lnl-hidden').toggleClass('lnl-active');
        });
    });
})(jQuery);