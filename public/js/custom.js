/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

$(document).ready(function () {

    // select jenis aduan
    $('#jenis_aduans_id').change(function () {
        console.log(this.value);
        $.get('/getbyjenis/' + this.value, function (data) {
            // console.log(data);
            var table = $('#table-aduan tbody');
            table.empty();

            data.forEach((element, index) => {
                var newRow = $('<tr>');
                var content = element.user_pekerja ? element.user_pekerja.name : '-';
                var statusBadge;

                switch (element.status) {
                    case 'completed':
                        statusBadge = '<div class="badge badge-success">Completed</div>';
                        break;
                    case 'in progress':
                        statusBadge = '<div class="badge badge-info">In Progress</div>';
                        break;
                    case 'pending':
                        statusBadge = '<div class="badge badge-warning">Pending</div>';
                        break;
                    default:
                        statusBadge = '<div class="badge badge-secondary">Unknown Status</div>';
                        break;
                }
                var editButton = $('<a>')
                    .attr('href', '/pengaduan/' + element.id + '/edit') // Replace with actual route and $item->id
                    .addClass('btn btn-primary')
                    .text('Detail');

                var cell = $('<td>').append(editButton);
                newRow.append('<td>' + (index + 1) + '</td>');
                newRow.append('<td>' + element.laporan + '</td>');
                newRow.append('<td>' + formatTime(element.created_at) + '</td>');
                newRow.append('<td>' + element.user_pelapor.name + '</td>');
                newRow.append('<td>' + content + '</td>');
                newRow.append('<td>' + statusBadge + '</td>');
                newRow.append(cell);

                table.append(newRow);
            });

        });
    })

    function formatTime(time) {
        var datetime = new Date(time);

        var formattedDate = datetime.getFullYear() + '-' +
            ('0' + (datetime.getMonth() + 1)).slice(-2) + '-' +
            ('0' + datetime.getDate()).slice(-2);

        var formattedTime = ('0' + datetime.getHours()).slice(-2) + ':' +
            ('0' + datetime.getMinutes()).slice(-2) + ':' +
            ('0' + datetime.getSeconds()).slice(-2);

        var formattedDateTime = formattedDate + ' ' + formattedTime;
        return formattedDateTime;
    }
})

