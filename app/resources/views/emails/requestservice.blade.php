<div width="100%" style="margin:0;padding:0!important;background-color:#f5f6fa">
<center style="width:100%;background-color:#f5f6fa">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f5f6fa">
        <tbody><tr>
            <td style="padding:30px 0">
                <table style="width:100%;max-width:620px;margin:0 auto">
        <tbody>
        <tr>
            <td style="text-align:center;padding-bottom:15px">
                <img style="max-height:50px;width:auto" src="{{asset('assets/logo.png')}}" alt=" logo" class="CToWUd">
            </td>
        </tr>
        </tbody>
    </table>
                    <table style="width:100%;max-width:620px;margin:0 auto;background-color:#ffffff">
        <tbody>
                <tr>
            <td style="padding:10px 30px 10px">
                Hello  Admin,
            </td>
        </tr>
                
        <tr>
            <td style="padding:0 30px">
                <p>There is a client service request, see details below:</p>
<table width="100%">
<tbody><tr>
<td width="150">Name</td>
<td width="25">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
<td>{{ $data['name']}}</td>
</tr>
<tr>
<td width="150">Email</td>
<td width="25">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
<td>{{ $data['email'] }} </td>
</tr>
<tr>
<td width="150">Address</td>
<td width="25">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
<td> {{ $data['address'] }}</td>
</tr>
<tr>
<td width="150">City</td>
<td width="25">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
<td> {{$data['city'] }}</td>
</tr>
<tr>
<td width="150">Services</td>
<td width="25">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
<td>  @forelse ($data['services'] as $service )
    {{$service}} <br>
@empty
    
@endforelse </td>
</tr>
<tr>
    <td width="150">Start Date</td>
    <td width="25">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
    <td> {{$data['start_date']}}</td>
    </tr>
    <tr>
    <td width="150">End Date</td>
    <td width="25">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
    <td> {{$data['end_date']}}</td>
    </tr>

</tbody></table>
<p>If you have any issues or complaints regarding any transaction, kindly send us an email at support@Mazeoptions.com</p>

            </td>
        </tr>

                </tbody>
    </table>
                <table style="width:100%;max-width:620px;margin:0 auto">
    <tbody>
    <tr>
        <td style="text-align:center;padding:25px 20px 0">
            <p style="font-size:13px">Mazeoptions © {{Date('Y')}}.</p>
                    </td>
    </tr>
    </tbody>
</table>
            </td>
        </tr>
    </tbody></table>
</center><div class="yj6qo"></div><div class="adL">
</div></div>