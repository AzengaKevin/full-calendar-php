document.addEventListener('DOMContentLoaded', function () {

    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        themeSystem: 'bootstrap',

        events: [{
            title: 'Past Event',
            start: '2021-03-01',
            end: '2021-03-02'
        }]
    });

    calendar.render();
    
    let addEventForm = document.getElementById('add-event-form');

    addEventForm.addEventListener('submit', event => {
        event.preventDefault();

        //Get the fields
        let title = document.getElementById('title').value;
        let start = document.getElementById('startDate').value;
        let end = document.getElementById('endDate').value;

        //Validate the fields

        //Add the event to the calendar
        calendar.addEvent({title, start, end});

        //Clear Fields
        document.getElementById('title').value = "";
        document.getElementById('startDate').value = "";
        document.getElementById('endDate').value = "";

        //Hide the modal
        $('#add-event').modal('hide');

    })

    let showEventsButton = document.getElementById('show-events')

    showEventsButton.addEventListener('click', event => {
        
        const eventListElement = document.getElementById('event-list');

        let eventList = '<ul>';

        calendar.getEvents().forEach(e => eventList += `<li>${e.title}</li>`);

        eventList += '</ul>';

        eventListElement.innerHTML = eventList

        $('#list-events').modal('show');
    })
});