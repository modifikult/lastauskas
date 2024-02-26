import $ from 'jquery';

function copyGoogleSource () {
    const link = $('.source-Google').attr('href');
    const btn = $('.google--button');

    btn.attr('href', link);
}

export {copyGoogleSource}