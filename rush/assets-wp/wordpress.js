document.addEventListener('DOMContentLoaded', function() {
  const trigger = document.getElementsByClassName( 'js-wpinfo-close' );
  if ( trigger ) {
    for ( var i = 0; i < trigger.length; i++ ) {
      trigger[i].addEventListener( 'click', function() {
        const target = document.getElementsByClassName( 'wp-template-info' );
        for ( var i = 0; i < target.length; i++ ) {
          target[i].classList.toggle( 'is-closed' );
        }
      }, false );
    }
  }

  const accordion = document.querySelector('.wp-template-info-accordion');
  const includedFilesList = document.querySelector('.wp-template-info-detail');

  accordion.addEventListener('click', function() {
    if (includedFilesList.style.display === 'none' || includedFilesList.style.display === '') {
      includedFilesList.style.display = 'block';
      accordion.classList.add('is-opened');
    } else {
      includedFilesList.style.display = 'none';
      accordion.classList.remove('is-opened');
    }
  });
});
