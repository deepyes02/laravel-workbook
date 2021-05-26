jQuery(function ($) {
    jQuery('#btn-add').on('click', function () {
        jQuery('#btn-save').val('add');
        jQuery('#myForm').trigger('reset');
        // jQuery('#formModal').modal('show');
    })

    //jquery
    $('#btn-save').on('click', function (e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
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
            success: function (data) {
                console.log(data);
                let todo = '<tr id="todo' + data.id + '"><td>' + data.id + '</td><td>' + data.title + '</td><td>' + data.description + '</td>';
                if (state == 'add') {
                    jQuery('#todos-list').append(todo);
                } else {
                    jQuery('#todo' + todo_id).replaceWith(todo);
                }
                jQuery('#myForm').trigger('reset');
                jQuery('#formModal').modal('hide');
                document.getElementById('data_add_success').innerHTML = `Success !! Data added`;

            },
            error: function (data) {
                console.log(data);
                document.getElementById('modal_box_notification').innerHTML = `Please fill properly`;
            }
        })
    }) // #End save button on click function

    //link button add url
    $('#link-btn-add').on('click', () => {
        jQuery('#link-btn-save').val('add');
        jQuery('#myForm').trigger('reset');
    })

    //link btn save
    $('#link-btn-save').on('click', function (e) {
        e.preventDefault();
        // $('#linkFormModal').modal('hide');
        //ajax setup
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') }
        });

        let state = jQuery('#link-btn-save').val(); //add
        let method = "POST";
        let link_url = "link";
        let linkFormData = {
            url: jQuery('#url').val(),
            description: jQuery('#description').val()
        }
        $.ajax({
            type: method,
            url: link_url,
            data: linkFormData,
            dataType: "json",
            success: function (data) {
                console.log(data);
                // let todo = '<tr id="todo' + data.id + '"><td>' + data.id + '</td><td>' + data.title + '</td><td>' + data.description + '</td>';
                let todo = `<tr id="todo${data.id}">
            <td>${data.id}</td>
            <td>${data.url}</td>
            <td>${data.description}</td><td>
            <!--Edit Url Button-->
            <button class="btn btn-success link-btn-edit" id="link-btn-edit" data-toggle="modal" data-target="#linkFormModal">Edit</button>
            <!--Delete Url Button-->
            <button class="btn btn-danger">Delete</button>
        </td>`;
                $('#todos-list').append(todo);
                $('#linkFormModal').modal('hide');


            },
            error: function (data) {
                console.log(data);
            }
        });

        // console.log(formData);


    })//save logic ends here

    //link button edit url
    $('.link-btn-edit').on('click', (e) => {
        e.preventDefault();
        console.log('edit button clicked');
    })






}) //end of jquery wrapper