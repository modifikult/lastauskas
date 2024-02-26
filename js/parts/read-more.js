import $ from 'jquery';

function toggleReadMore () {
    const btn = $('.read--more');

    btn.on('click', function (e) {
        e.preventDefault();

        const card = $(this).closest('.card-reviews');

        if(!$(this).data('read-more')) {
            card.toggleClass('full--text');
            $(this).text('Mažiau');
            $(this).data('read-more', 'true');
        } else {
            card.toggleClass('full--text');
            $(this).text('Plačiau ->');
            $(this).data('read-more', 'false');
        }
    })
}

export {toggleReadMore}