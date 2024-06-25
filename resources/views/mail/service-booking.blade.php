<p>{{$data->service_item_id}}-ზე მოხდა დაჯავშნა</p>

<p>აიდი: {{$data->id}}</p>

<p>თარიღი: {{$data->date}}</p>

<p>რაოდენობა: {{$data->quantity}}</p>

<p>ჯამური ღირებულება: {{$data->total_price}}</p>

<p>მომხმარებლის სახელი:  {{$data->visitor_name}}</p>

<p>მომხმარებლის იმეილი: {{$data->visitor_email}}</p>

<p>მომხმარებლის ნომერი: {{$data->visitor_number}}</p>

<p>გადახდის მეთოდი:
    @if($data->pay_method == 2)
        ქეში
    @else
        ინვოისი
    @endif
</p>