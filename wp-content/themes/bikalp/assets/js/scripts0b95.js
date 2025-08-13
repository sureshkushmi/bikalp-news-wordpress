$(document).ready(function () {

    var key = 'AIzaSyC4LDYPDlZXI682bmX5FNDcAQZUjMfeC3M';
    var playlistId = 'PLMZ-CAnVR0pdWIZcD8ETW_nwUPTbpkSDZ';
    var URL = 'https://www.googleapis.com/youtube/v3/playlistItems';
    var options = {
        part: 'snippet',
        key: key,
        maxResults: 8,
        playlistId: playlistId,
        order: 'date'
    }

    loadVids();

    function loadVids() {
        $.getJSON(URL, options, function (data) {
            var id = data.items[0].snippet.resourceId.videoId;
            mainVid(id);
            resultsLoop(data);
        });
    }

    function mainVid(id, autoPlay) {
        $('#yt-video').html(`<iframe id="iframe" width="100%" height="100%" src="https://www.youtube.com/embed/${id}?enablejsp=1&rel=0&modestbranding=1${autoPlay}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>`);
    }
        
    function resultsLoop(data) {
        $.each(data.items, function (i, item) {
            var thumb = item.snippet.thumbnails.medium.url;
            var title = item.snippet.title;
            var desc = item.snippet.description.substring(0, 100);
            var vid = item.snippet.resourceId.videoId;
            
            videoPublished = new Date(item.snippet.publishedAt);
            formattedDate = videoPublished .getDate() + '/' + (videoPublished .getMonth()+1) + '/' + videoPublished .getFullYear();


            $('.yt-video-lists').append(`
                <div class="yt-item" data-key="${vid}">
                    <img src="${thumb}" alt="" class="thumb">
                    <div class="yt-video-info">
                        <h4 class="video-title">${title}</h4>
                        <span class="video-duration">Uploaded At: ${formattedDate}</span> 
                    </div>
                </div>
            `);
        });
    }

    // CLICK EVENT
    $('.yt-video-lists').on('click', '.yt-item', function () {
        var autoPlay = '&autoplay=1';
        var id = $(this).attr('data-key');
        
        mainVid(id, autoPlay);
    });
});


jQuery(document).ready(function($){
    $("#ntvmodal").modal('show');
});