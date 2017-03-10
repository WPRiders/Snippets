$(document).on('click tap', '.someElementClass', function (e) {
    if (typeof e.isTrigger === 'undefined') {
      console.log('Hooman did the click');
    }else{
        // This was triggered by jQuery.trigger('click');
        // e.isTrigger has now a numeric value
        console.log('No hooman did this :)');
    }
}

/*
This snippet is part of the article published here:
http://www.wpriders.com/snippets/jquery-determine…y-jquery-trigger/

In case you want to work with us, please post your task here:
www.wpriders.com/hire-us-ref

*/
