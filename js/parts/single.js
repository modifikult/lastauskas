import $ from 'jquery';

function wrapSingleIframe () {
    const iframe = $('.single-post .content-block iframe');

    iframe.wrap('<div class="video__wrap"></div>');
}

export {wrapSingleIframe}