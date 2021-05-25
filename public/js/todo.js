jQuery(function($){
    jQuery('#btn-add').on('click', function(){
        jQuery('#btn-save').val('add');
        jQuery('#myForm').trigger('reset');
        // jQuery('#formModal').modal('show');
    })

    //jquery
    $('#btn-save').on('click', function(e){
        e.preventDefault();
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN' : jQuery('meta[name="csrf-token"]').attr('content')
            }
        })
        let formData = {
            title: jQuery('#title').val(),
            description: jQuery('#description').val()
        }
        let state = jQuery('#btn-save').val(); //add
        let submit_type = 'POST';
        let todo_id = jQuery('#todo_id').val(); //starts at 0
        let ajax_url = 'todo'; //after program success, check if this can be modified with route() name instead

        //start ajax function
        $.ajax({
            type: submit_type,
            url: ajax_url,
            data: formData,
            dataType: 'json',
            success: function(data) {
                console.log(data);
                let todo = '<tr id="todo' + data.id + '"><td>' + data.id + '</td><td>' + data.title + '</td><td>' + data.description + '</td>';
                if(state == 'add') {
                    jQuery('#todos-list').append(todo);
                } else {
                    jQuery('#todo' + todo_id).replaceWith(todo);
                }
                jQuery('#myForm').trigger('reset');
                jQuery('#formModal').modal('hide');
                document.getElementById('data_add_success').innerHTML = `Success !! Data added`;

            },
            error: function(data){
                console.log(data);
                document.getElementById('modal_box_notification').innerHTML = `Please fill properly`;
            }
        })
        


    }) // #End save button on click function
    








}) //end of jquery wrapper