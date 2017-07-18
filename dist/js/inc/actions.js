$(document).ready(function () {
	$('body').on('click', '[data-dp-action]', function (e) {
		e.preventDefault();

        var $this = $(this);
        var action = $(this).data('dp-action');

        switch (action) {
				
			case 'left-sidebar-toggle':
				var target = $this.data('dp-target');
				var backdrop = '<div data-dp-action="sidebar-close" class="ma-backdrop" />';
				
				if($('body').hasClass('left-sidebar-toggled')){
					$('body').removeClass('left-sidebar-toggled');
					$this.removeClass('toggled');
					$(target).removeClass('toggled');
					$(target).find('.nav-menu').removeClass('toggled');
				}else{
					$('body').addClass('left-sidebar-toggled');
					$this.addClass('toggled');
					$(target).addClass('toggled');
					$(target).find('.nav-menu').addClass('toggled');
				}
                
                break;
				
			case 'sidebar-open':
                var target = $this.data('dp-target');
                var backdrop = '<div data-dp-action="sidebar-close" class="dp-backdrop" />';

                $('body').addClass('sidebar-toggled');
                $('#header, #header-alt, #main').append(backdrop);
                $this.addClass('toggled');
                $(target).addClass('toggled');

                break;

            case 'sidebar-close':
                $('body').removeClass('sidebar-toggled');
                $('.dp-backdrop').remove();
                $('#sidebar-right, .dp-trigger').removeClass('toggled')

                break;
				
			case 'submenu-toggle':
                $this.next().slideToggle(200);
                $this.parent().toggleClass('toggled');
                break;
				
			case 'todo-form-open':
				$this.closest('.todo-add').addClass('toggled');
				break;
			
			case 'todo-form-close':
				$this.closest('.todo-add').removeClass('toggled');
				$this.closest('.todo-add').find('textarea').val('');
				break;
			
			case 'change-skin':
				var skin = $this.data('dp-skin');
				$('[data-dp-theme]').attr('data-dp-theme', skin);
				break;
				
		}
    });													
    
});