$(function() {
$('.chart').easyPieChart({
    easing: 'easeOutBounce',
    onStep: function(from, to, percent) {
        $(this.el).find('.percent').text(Math.round(percent));
    }
});
var chart = window.chart = $('.chart').data('easyPieChart');
});