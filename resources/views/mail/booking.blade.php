<p>თქვენს სასტუმროში - {{$data->hotel}} მოხდა დაჯავშნა</p>

<p>თარიღი: {{$data->start_date->format('Y-m-d')}} - {{$data->end_date->format('Y-m-d')}}</p>

<p>ჯამური ღირებულება: {{$data->total_price}}</p>

<p>მომხმარებლის სახელი:  {{$data->name}}</p>

<p>მომხმარებლის იმეილი: {{$data->email}}</p>

<p>მომხმარებლის ნომერი: {{$data->number}}</p>

<p>{{$data->text}}</p>
