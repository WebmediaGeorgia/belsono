window.addEventListener("DOMContentLoaded", (event) => {

    // скрипт онлайн записи


(function() {
    const style = document.createElement('style');
    style.innerHTML = `
              #online-booking-widget {
                width: 27.865vw;
                height:auto;
    overflow: hidden;
    position: static;

              }
              #online-booking-widget.--visible:after{
                content: '';
                width: 100vw;
              
                visibility: visible;
              
              }
              #online-booking-widget.--visible{
                width:490px;
              }
              #online-booking-widget iframe {
    width: 100%;
    height: 61vw;
    left: 0;
    top: 3.229vw;
    border: none;
    position:static;
}
               #widget-header{
                display: none;
               
               }
               #widget-title{
                font-family: Roboto,Arial,Helvetica,sans-serif;
                font-size: 20px;
                font-weight: bold;
                color: #081a24;
                text-align: center;
                margin: 0;
                padding: 0;
               }
               #close-button{
                position: absolute;
                width: 0px;
                height: 0px;
                top: 20px;
                cursor: pointer;
                
             
               }
                #close-button:active{
                    width: 0px;
                    height: 0px;
                }
                #close-button:hover{
                    opacity: 0.7;
                }
                .body-overflow-hidden{
                    overflow: hidden;
                }
                @media only screen and (max-width:1200px){
                  #online-booking-widget {
                    width: 92.188vw;
    height: auto;
    overflow: hidden;
              }
              #online-booking-widget.--visible:after{
                content: '';
                width: 100vw;
              
                visibility: visible;
              
              }
              #online-booking-widget.--visible{
                width:490px;
              }
              #online-booking-widget iframe {
    width: 100%;
    height: 100vw;
    left: 0;
    top: 3.229vw;
    border: none;
    position:static;
}
                }
                @media (max-width: 490px) {
                  #online-booking-widget iframe{
                    width: 100%;
                    height: 180vw;
                  }
                   #online-booking-widget.--visible{
                    width:100vw;
                  }
                   #widget-header{
                    width:100vw;
                    padding: 20px;
                   }
                }
              `;
    document.head.appendChild(style);
    const ICON_CLOSE = `<svg viewBox="0 0 1024 1024">
                    <path
                        d="M874.572 85.333l64.094 64.094-362.581 362.572 362.581 362.572-64.094 64.094L512 576.084 149.428 938.665l-64.094-64.094 362.539-362.572L85.334 149.427l64.094-64.094L512 447.872 874.572 85.333z"
                        fill="inherit"
                        stroke="inherit"
                        stroke-width="inherit"
                        stroke-linejoin="inherit"
                        stroke-linecap="inherit"
                        stroke-miterlimit="inherit"
                    />
                </svg>`;
    const WIDGET_TOGGLER_ID = 'online-booking-widget__toggler';
    const CLOSE_BUTTON_ID = 'close-button';
    const WIDGET_TITLE_ID = 'widget-title';
    const WIDGET_HEADER_ID = 'widget-header';
    const BODY_OVERFLOW_HIDDEN = 'body-overflow-hidden';
    const VISIBLE_CLASS = '--visible';
    const ONLINE_REGISTRATION = 'online запись';
    const iframe = document.createElement('iframe');
    const wrapper = document.createElement('div');
    const wrap = document.querySelector('.online_sign_content .iframe')
    const header = document.createElement('header');
    const closeButton = document.createElement('span');
    const onlineRegistrationTitle = document.createElement('div');
    Object.assign(header, {
      id: WIDGET_HEADER_ID,
    });
    Object.assign(onlineRegistrationTitle, {
      id: WIDGET_TITLE_ID,
      innerHTML: ONLINE_REGISTRATION,
    });
    Object.assign(closeButton, {
      id: CLOSE_BUTTON_ID,
      innerHTML: ICON_CLOSE,
    });
    header.appendChild(onlineRegistrationTitle);
    header.appendChild(closeButton);
    Object.assign(wrapper, {
      id: 'online-booking-widget',
    });
    const toggleVisibleClass = () => {
      wrapper.classList.toggle(VISIBLE_CLASS);
      document.body.classList.toggle(BODY_OVERFLOW_HIDDEN);
    };

    const IS_WIDGET_OPENED = 'is-obw-opened';
    const DOCTOR_ID = 'doctorId';
    const BRANCH_ID = 'branchId';
    const params = new URLSearchParams(window.location.search);
    const isWidgetOpened = params.get(IS_WIDGET_OPENED);
    const doctorId = params.get(DOCTOR_ID);
    const branchId = params.get(BRANCH_ID);

    this.OnlineBookingWidgetInit = ({
      CLINIC_ID,
      WIDGET_ORIGIN,
      TOGGLERS_ID = 'online-booking-widget__toggler'
    }) => {
      const togglerButtonSelectors = TOGGLERS_ID.split(',');

      const onWindowMount = () => {
        Object.assign(iframe, {
          src: WIDGET_ORIGIN,
        });
       wrap.appendChild(wrapper);
        wrapper.appendChild(iframe);
        wrapper.appendChild(header);
        iframe.addEventListener('load', () => {
          let props = {
            CLINIC_ID
          };
          if (isWidgetOpened) {
            if (doctorId) {
              props = {
                ...props,
                DOCTOR_ID: doctorId,
                BRANCH_ID: branchId
              };
            }
            toggleVisibleClass();
            params.delete(IS_WIDGET_OPENED);
            params.delete(DOCTOR_ID);
            params.delete(BRANCH_ID);
            window.history.pushState({}, document.title, window.location.pathname);
          }
          const iWindow = iframe.contentWindow;
          iWindow.postMessage({
            message: 'postWidgetProps',
            props
          }, '*');
        });
        if (togglerButtonSelectors && closeButton) {
          togglerButtonSelectors.map((selector) => {
            const togglerButton = document.querySelector(`#${selector.trim()}`);
            if (togglerButton) {
              togglerButton.addEventListener('click', toggleVisibleClass);
            }
          });
          closeButton.addEventListener('click', toggleVisibleClass);
        }
      };

      const onWindowUnmount = () => {
        if (togglerButtonSelectors && closeButton) {
          togglerButtonSelectors.map((selector) => {
            const togglerButton = document.querySelector(`#${selector.trim()}`);
            if (togglerButton) {
              togglerButton.removeEventListener('click', toggleVisibleClass);
            }
          });
          closeButton.removeEventListener('click', toggleVisibleClass);
        }
      };

      window.addEventListener('load', onWindowMount, false);
      window.addEventListener(
        'beforeunload',
        () => {
          onWindowUnmount();
          window.removeEventListener('load', onWindowMount, false);
        },
        false,
      );
    };



  })();


  OnlineBookingWidgetInit({
    WIDGET_ORIGIN: 'https://aibolit-obw.web.app',
    CLINIC_ID: 'belsono',
  });

  console.log(OnlineBookingWidgetInit);

})