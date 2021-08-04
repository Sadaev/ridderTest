<!DOCTYPE html>
<html>
<head>
    <title>Вакцинация в г.Риддер</title>
</head>

<body>
    <h1>Здравствуйте, {{ $lotteryParticipant['fio'] }}</h1>
    <p>Вы оставляли заявку на участие в конкурсе по розыгрышу призов на сайте "Вакцинация в г.Риддер"</p>

    <p>Ваша заявка одобрена! Ваш номер участника: {{ $lotteryParticipant['id'] }}. </p>

    <p>Подпишитесь на нас в соцсетях, чтобы не пропустить итоги конкурса:</p>

    <table border="0" cellpadding="0" cellspacing="0" width="150px">
        <tr>
            <td valign="top">
                <a href="https://instagram.com/akimatridder?utm_medium=copy_link" target="_blank">
                    <img src="{{asset('images/instagram.png')}}" alt="Иконка инстаграмма" style="display: block">
                </a>
            </td>
            <td valign="top">
                <a href="https://www.facebook.com/profile.php?id=100009764318178" target="_blank">
                    <img src="{{asset('images/odnoklassniki.png')}}" alt="Иконка одноклассников" style="display: block">
                </a>
            </td>
            <td valign="top">
                <a href="https://ok.ru/profile/588834059008" target="_blank">
                    <img src="{{asset('images/facebook.png')}}" alt="Иконка фейсбука" style="display: block">
                </a>
            </td>
        </tr>
    </table>

</body>
</html>
