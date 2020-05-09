$('#productTable').DataTable();
$(document).ready(function () {
    $('.btnCopyLink').on('click', function () {
        var link = $(this).attr('data-link');
        copyToClipboard(link);
        alert('Copied');
    });
    $('.btnNewsUrl').on('click', function () {
        var urls = $(this).attr('data-news-url');
        var affId = $(this).attr('data-aff-id');
        var modal = $('#newsModal');
        urls = urls.split('\n');
        var i;
        var el = '';
        for (i = 0; i < urls.length; i++) {
            var url = urls[i].split(':::');
            var title = url[0];
            var _url = url[1] + '&aff_sub1=' + affId;
            el += '<li>';
            el += '<a target="_blank" href="' + _url + '">' + title + '</a>';
            el += '</li>';
        }
        $('#newsModal .modal-body ul').html(el);
        modal.modal();
    });
});
function copyToClipboard(text) {
    if (window.clipboardData && window.clipboardData.setData) {
        // Internet Explorer-specific code path to prevent textarea being shown while dialog is visible.
        return clipboardData.setData("Text", text);

    }
    else if (document.queryCommandSupported && document.queryCommandSupported("copy")) {
        var textarea = document.createElement("textarea");
        textarea.textContent = text;
        textarea.style.position = "fixed";  // Prevent scrolling to bottom of page in Microsoft Edge.
        document.body.appendChild(textarea);
        textarea.select();
        try {
            return document.execCommand("copy");  // Security exception may be thrown by some browsers.
        }
        catch (ex) {
            console.warn("Copy to clipboard failed.", ex);
            return false;
        }
        finally {
            document.body.removeChild(textarea);
        }
    }
}