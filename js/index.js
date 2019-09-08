var app = new Vue({
  el: '#app',
  data: {
    inMove: false,
    activeSection: 0,
    offsets: [],
    touchStartY: 0
  },
  methods: {
    handleMouseWheel: function(e) {
      if (e.wheelDelta == -30 && !this.inMove) {
        this.moveUp();
      } else if (e.wheelDelta == 30 && !this.inMove) {
        this.moveDown();
      }
    },
    calculateSectionOffsets() {
      let sections = document.getElementsByTagName('section');
      let length = sections.length;
      
      for(let i = 0; i < length; i++) {
        let sectionOffset = sections[i].offsetTop;
        this.offsets.push(sectionOffset);
      }
    },
    moveDown() {
      this.inMove = true;
      this.activeSection--;
        
      if(this.activeSection < 0) this.activeSection = this.offsets.length - 1;
        
      this.scrollToSection(this.activeSection, true);
    },
    moveUp() {
      this.inMove = true;
      this.activeSection++;
        
      if(this.activeSection > this.offsets.length - 1) this.activeSection = 0;
        
      this.scrollToSection(this.activeSection, true);
    },
    scrollToSection(id, force = false) {
      if(this.inMove && !force) return false;
      
      this.activeSection = id;
      this.inMove = true;
      
      window.scrollTo({top: this.offsets[id], behavior: 'smooth'});
      
      setTimeout(() => {
        this.inMove = false;
      }, 500);
    },
    touchStart(e) {
      this.touchStartY = e.touches[0].clientY;
    },
    touchMove(e) {
      if(this.inMove) return false;
      e.preventDefault();
      
      const currentY = e.touches[0].clientY;
      
      if(this.touchStartY > currentY) {
        this.moveDown();
      } else {
        this.moveUp();
      }
      
    }
  },
  created() {
    this.calculateSectionOffsets();
    
    window.addEventListener('mousewheel', this.handleMouseWheel);
    window.addEventListener('DOMMouseScroll', this.handleMouseWheel);
    
    window.addEventListener('touchstart', this.touchStart, { passive: false });
    window.addEventListener('touchmove', this.touchMove, { passive: false });
  },
  destroyed() {
    window.removeEventListener('mousewheel', this.handleMouseWheel);
    window.removeEventListener('DOMMouseScroll', this.handleMouseWheel);
    
    window.removeEventListener('touchstart', this.touchStart);
    window.removeEventListener('touchmove', this.touchMove);
  }
});

$(function () {
  $('a.paypal').click(function () {
    $('.paypal form').submit();
  });
  $('.contact a.send').click(function () {
    $('.contact .submit').click();
  });
});