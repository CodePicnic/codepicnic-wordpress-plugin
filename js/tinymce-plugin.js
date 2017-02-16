tinymce.PluginManager.add('codepicnic', function(editor, url) {
  var imageURL = url.split('/');

  imageURL[imageURL.length - 1] = 'img';
  imageURL.push('codepicnic.png');

  console.log(imageURL.join('/'));

  editor.addButton('codepicnic', {
    title: 'Embed CodePicnic console',
    image: imageURL.join('/'),
    onclick: function() {
      editor.windowManager.open({
        title: 'Embed CodePicnic console',
        body: [
          { type: 'textbox', name: 'url', label: 'Console URL' }
        ],
        onsubmit: function(event) {
          editor.insertContent('[embed width="100%" height="350"]' + event.data.url + '[/embed]');
        }
      });
    }
  });
});