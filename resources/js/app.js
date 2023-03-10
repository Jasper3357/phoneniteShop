import './bootstrap';
import Alpine from 'alpinejs'
import Splide from '@splidejs/splide';
import jQuery from 'jquery';

window.$ = jQuery;

window.Alpine = Alpine
 
Alpine.start()

new Splide( '.splide',{
  type: 'loop',
  perPage: 4,
  gap: '3vw',
  perMove: 1,
  autoplay: true,
  interval: 10000,
  pagination: false,
  arrows: true,
} ).mount();
 
