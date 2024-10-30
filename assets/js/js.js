document.addEventListener( 'DOMContentLoaded', function( event ) {

      try {

            const main_element     = document.getElementById( "light-weight-wa-chatting" );
            const show_hide        = main_element.getAttribute( "data-showonwebsite" );
            const animation        = main_element.getAttribute( "data-animation" );
            const TIME             = 1000;
            const position_element = document.getElementById( "light-weight-wa-chatting-position" );
            
            if ( show_hide == "show" ) {
                  main_element.style.display = "block";
                  if ( animation == "animate" ){
                        if ( position_element.classList.contains( "light-weight-wa-chatting-whatsapp-bottom-right-hide-at-start" ) ) {
                              position_element.classList.remove( "light-weight-wa-chatting-whatsapp-bottom-right-hide-at-start" )
                              position_element.classList.add( "light-weight-wa-chatting-whatsapp-bottom-right-animation-start" );
                              setTimeout( function () {
                                    position_element.classList.add( "light-weight-wa-chatting-whatsapp-bottom-right-show-at-end" );
                              }, TIME );
                        } else if ( position_element.classList.contains( "light-weight-wa-chatting-whatsapp-bottom-left-hide-at-start" ) ) {
                              position_element.classList.remove( "light-weight-wa-chatting-whatsapp-bottom-left-hide-at-start" )
                              position_element.classList.add( "light-weight-wa-chatting-whatsapp-bottom-left-animation-start" );
                              setTimeout( function () {
                                    position_element.classList.add( "light-weight-wa-chatting-whatsapp-bottom-left-show-at-end" );
                              }, TIME );
                        } else if ( position_element.classList.contains( "light-weight-wa-chatting-whatsapp-top-right-hide-at-start" ) ) {
                              position_element.classList.remove( "light-weight-wa-chatting-whatsapp-top-right-hide-at-start" )
                              position_element.classList.add( "light-weight-wa-chatting-whatsapp-top-right-animation-start" );
                              setTimeout( function () {
                                    position_element.classList.add( "light-weight-wa-chatting-whatsapp-top-right-show-at-end" );
                              }, TIME );
                        } else if ( position_element.classList.contains( "light-weight-wa-chatting-whatsapp-top-left-hide-at-start") ) {
                              position_element.classList.remove( "light-weight-wa-chatting-whatsapp-top-left-hide-at-start" )
                              position_element.classList.add( "light-weight-wa-chatting-whatsapp-top-left-animation-start" );
                              setTimeout( function () {
                                    position_element.classList.add( "light-weight-wa-chatting-whatsapp-top-left-show-at-end" );
                              }, TIME );
                        } else if ( position_element.classList.contains( "light-weight-wa-chatting-whatsapp-bottom-center-hide-at-start" ) ) {
                              position_element.classList.remove( "light-weight-wa-chatting-whatsapp-bottom-center-hide-at-start" )
                              position_element.classList.add( "light-weight-wa-chatting-whatsapp-bottom-center-animation-start" );
                              setTimeout( function () {
                                    position_element.classList.add( "light-weight-wa-chatting-whatsapp-bottom-center-show-at-end" );
                              }, TIME );
                        } else if ( position_element.classList.contains( "light-weight-wa-chatting-whatsapp-top-center-hide-at-start" ) ) {
                              position_element.classList.remove( "light-weight-wa-chatting-whatsapp-top-center-hide-at-start" )
                              position_element.classList.add( "light-weight-wa-chatting-whatsapp-top-center-animation-start" );
                              setTimeout( function () {
                                    position_element.classList.add( "light-weight-wa-chatting-whatsapp-top-center-show-at-end" );
                              }, TIME );
                        }
                  } else if ( animation == "donotanimate" ) {
                        if ( position_element.classList.contains( "light-weight-wa-chatting-whatsapp-bottom-right-hide-at-start" ) ) {
                              position_element.classList.add( "light-weight-wa-chatting-whatsapp-bottom-right-show-at-end" );
                        } else if ( position_element.classList.contains( "light-weight-wa-chatting-whatsapp-bottom-left-hide-at-start" ) ) {
                              position_element.classList.add( "light-weight-wa-chatting-whatsapp-bottom-left-show-at-end" );
                        } else if ( position_element.classList.contains( "light-weight-wa-chatting-whatsapp-top-right-hide-at-start" ) ) {
                              position_element.classList.add( "light-weight-wa-chatting-whatsapp-top-right-show-at-end" );
                        } else if ( position_element.classList.contains( "light-weight-wa-chatting-whatsapp-top-left-hide-at-start" ) ) {
                              position_element.classList.add( "light-weight-wa-chatting-whatsapp-top-left-show-at-end" );
                        } else if ( position_element.classList.contains( "light-weight-wa-chatting-whatsapp-bottom-center-hide-at-start" ) ) {
                              position_element.classList.add( "light-weight-wa-chatting-whatsapp-bottom-center-show-at-end" );
                        } else if ( position_element.classList.contains( "light-weight-wa-chatting-whatsapp-top-center-hide-at-start" ) ) {
                              position_element.classList.add( "light-weight-wa-chatting-whatsapp-top-center-show-at-end" );
                        }
                  }
            } else {
                  main_element.style.display = "none";
            }
      } catch ( e ) {
            console.log( e );
      }
} );