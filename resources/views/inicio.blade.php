<x-layout.app titulo="Inicio">
    <h1>INICIO</h1>

    <body>
    <div class="ml-8 mr-8">
        <table class="border border-b-2 bg-gray-100 items-center">
            <thead>
            <tr>
                <th>name</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>fernando</td>
            </tr>
            <tr>
                <td>Raquel</td>
            </tr>
<!--           @foreach($especialidad as $esp)
               <tr>
                   <td>
                     {{$esp->name}}
                   </td>
               </tr>
           @endforeach-->
            </tbody>
        </table>
    </div>
    </body>

</x-layout.app>
