<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Программы лояльности");
?>
    <script type='text/javascript'>
        jQuery(document).ready(function () {

            jQuery('.banksName').click(function () {
                var id = $(this).attr('idBank');
                var elem = $('#' + id);
                elem.siblings(".contentBank").hide();
                elem.toggle();
//                hideBanks(elem);
            });

            jQuery('.bonus_head').click(function () {
                $('#bonus_hide').toggle();
            });

            function hideBanks(elem) {
                $(document).mouseup(function (e) {
                    var container = $(elem);
                    if (container.has(e.target).length === 0) {
                        container.hide();
                    }
                });
            }
        });

    </script>

    <ul class="TextList dash">
        <li><a href="#discount">Дисконт</a></li>
        <li><a href="#gift_cards">Подарочные карты</a></li>
        <li><a href="#weekend_discount">Скидка выходного дня</a></li>
        <li><a href="#credit">Кредит</a></li>
        <li><a href="#bonus_program">Программа БОНУС</a></li>
    </ul>

    <div class="blockAnchor"><a name="discount"></a></div>
    <h1>Дисконт</h1>
    <p class="TextP">Стать нашим Постоянным клиентом легко!</p>
    <p class="TextP">Для этого Вам необходимо лишь подойти в администрацию любого из наших филиалов и попросить выдать
        карту. Также карта может быть выдана при доставке товара из интернет-магазина.</p>
    <img src="../img/discont_karte.png" alt="Дисконтная карта">
    <p></p>
    <p class="TextListName">Владелец Дисконтной карты имеет право на получение
        особых условий в любом из наших филиалов:</p>
    <ul class="TextList dash">
        <li>особая категория цен;</li>
        <li>предоставление истории покупок.</li>
    </ul>
    <p class="TextP">Наша система скидок является накопительной, т.е.
        Вам необходимо лишь при очередных покупках предоставлять Дисконтную карту.</p>
    <p class="TextListName">Категории цен:</p>
    <ul class="TextList dash">
        <li>Сумма покупок свыше 15.000 рублей - среднеоптовая категория;</li>
        <li>Сумма покупок свыше 30.000 рублей - оптовая категория;</li>
        <li>Сумма покупок свыше 50.000 рублей - крупнооптовая категория.</li>
    </ul>
    <p class="TextP InfoText">*При суммировании стоимости купленных Вами товаров
        учитываются все товары без исключения, в том числе и те, на которые не
        распространяется действие Дисконтной карты. Например, если Вы покупаете
        товар из особого списка Акционного товара, и скидка на этот товар не
        распространяется, но сумма оплаченных Вами заказов все равно увеличивается
        на стоимость этого товара, что обеспечит Вам в дальнейшем большую скидку.</p>
    <!--    <p class="TextP InfoText">Так же, являясь обладателем Дисконтной карты, Вы можете-->
    <!--        всегда получить данные о совершенных Вами покупках в прошлом.-->
    <!--        Данную информацию можно получить в администрации любого филиала.</p>-->
    <!--    <p class="TextP InfoText">*Будьте внимательны! В автоматическом режиме в-->
    <!--        историю Ваших покупок не попадают товары купленные по спецпредложениям,-->
    <!--        оплаченные кредитной либо подарочной картами, а так же товары оформленные-->
    <!--        в кредит. На данные покупки сохраняйте чек.</p>-->
    <p class="TextP InfoText">Специально для постоянных покупателей действует Накопительная
        система начисления скидки, рассчитанная на длительное и плодотворное
        сотрудничество.</p>

    <div class="blockAnchor"><a name="gift_cards"></a></div>
    <h1>Подарочные карты</h1>
    <p class="TextP">Выбрать подарок близким или коллегам зачастую
        непросто, но есть прекрасное универсальное решение для любого
        повода – ПОДАРОЧНАЯ КАРТА от сети магазинов АПЕЛЬСИН.</p>
    <p class="TextP">Подарочные карты не ограничивают фантазию в выборе!
        На сумму номинала карты можно выбрать всё, что придётся по душе -
        от множества необходимых расходных мелочей, до серьезных покупок.</p>
    <img src="../img/gift_cards.png" alt="Подарочная карта" class="AplsFullImg">
    <p></p>
    <p class="TextP">Подарочная карта не имеет срока давности и всегда останется актуальным подарком.</p>
    <p class="TextP">Мы предлагаем Подарочные карты номиналом 1000, 3000, 5000,
        10000 рублей. Номинал подарочный карты не ограничивает владельца в выборе:
        всегда можно доплатить разницу наличными или банковской картой.</p>
    <p class="TextP">Приобрести подарочные карты Вы можете в любом розничном
        магазине нашей сети.</p>
    <p class="TextP InfoText">*Подарочная карта является публичной офертой
        и упраздняет необходимость заключения договора между продавцом и
        покупателем, согласно статье 435 ГК РФ. Подарочная карта может быть
        отоварена только в магазинах розничной сети АПЕЛЬСИН.
        Остаток денежных средств на Подарочной карте после совершения
        клиентом покупки аннулируется. В случае если сумма покупки
        превышает размер номинала, указанного на лицевой стороне Подарочной
        карты, покупатель оплачивает превышающую сумму покупки отдельно.
        После совершения покупки Подарочная карта изымается. Будьте внимательны!
        Подарочная карта обмену и возврату не подлежит! Подарочная карта
        с механическими повреждениями является недействительной!</p>

    <div class="blockAnchor"><a name="weekend_discount"></a></div>
    <h1>Скидка выходного дня</h1>
    <p class="TextP">Внимание! Каждое воскресенье скидка до 10% для всех розничных покупателей.</p>
    <p class="TextP InfoText">* Скидка не распространяется на товары, участвующие в иных акциях или распродажах.</p>

    <div class="blockAnchor"><a name="credit"></a></div>
    <h1>Кредит</h1>
    <p class="TextP">Уважаемые клиенты, для Вашего удобства компания АПЕЛЬСИН
        предоставляет возможность купить строительные материалы в кредит.</p>
    <p class="TextP InfoText"> Обращаем Ваше внимание на то, что система кредитного обслуживания
        Компании основывается на полном отсутствии выгоды от посредничества
        между Клиентом и Банком. Это означает, что Мы не берем в свою пользу
        ни процентов от сделки по обеспечению кредита, ни платы за обслуживание.</p>
    <p class="TextP">По первому запросу менеджер нашего кредитного отдела предоставит Вам консультацию или справку
        на любом шаге оформления.</p>
    <p class="TextP">Позвольте себе строить больше ничего не теряя и экономя главное — время.</p>
    <p class="TextListName">Всё достаточно просто:</p>
    <ol class="TextList num">
        <li>Выбираете товар.</li>
        <li>Выписываете его заказом у менеджера торгового зала.</li>
        <li>Обращаетесь с выписанным заказом к менеджеру кредитного отдела.</li>
    </ol>
    <p class="TextListName">Менеджер кредитного отдела в свою очередь:</p>
    <ul class="TextList dash">
        <li>Поможет Вам в выборе обслуживающего Банка.</li>
        <li>Окажет помощь в выборе кредитного продукта, исходя из Ваших индивидуальных потребностей.</li>
        <li>Проверит Ваши документы на соответствие требованиям Банка.</li>
        <li>Сообщит решение Банка по Вашей кредитной заявке.</li>
        <li>Подготовит договор о предоставлении целевого потребительского кредита в случае положительного решения.</li>
    </ul>
    <p class="TextP">Компания АПЕЛЬСИН оказывает помощь в оформлении кредита в следующих банках:</p>
    <div>
        <img src="../img/russStand.png" class="LogoBanks banksName" idBank="russStand"
             title="Нажмите для получения подробной информации">
        <img src="../img/pochta-bank.png" class="LogoBanks banksName" idBank="pochta-bank"
             title="Нажмите для получения подробной информации">
        <img src="../img/homeCredit.png" class="LogoBanks banksName" idBank="homeCredit"
             title="Нажмите для получения подробной информации">
        <img src="../img/renessans.png" class="LogoBanks banksName" idBank="renessans"
             title="Нажмите для получения подробной информации">
        <img src="../img/OTP-bank.png" class="LogoBanks banksName" idBank="OTP-bank"
             title="Нажмите для получения подробной информации">
        <div class="clear"></div>
    </div>
    <!--Ин-фа по банкам-->

    <div class="contentBankWrapper">
        <div class="contentBank" id="russStand">
            <hr>
            <img src="../img/russStand.png" class="LogoBanksSmall">
            <div class="logoText">
                <p class="TextP">АО «Банк Русский Стандарт»<br>Лицензия ЦБ РФ №2289 от 19.11.2014 г.</p>
            </div>
            <table class="Stylized tableBanksDataLeft">
                <tr>
                    <th>Требования к заёмщику:</th>
                    <th>Документы:</th>
                </tr>
                <tr>
                    <td>
                        <ol class="TextList num">
                            <li>Гражданство РФ</li>
                            <li>Возраст:
                                <ol class="TextList num">
                                    <li>от 20 до 65 лет для мужчин;</li>
                                    <li>от 18 до 65 лет для женщин;</li>
                                </ol>
                            </li>
                            <li>Постоянная регистрация в любом регионе</li>
                        </ol>
                    </td>
                    <td>
                        <ol class="TextList num">
                            <li>Паспорт гражданина РФ</li>
                        </ol>
                    </td>
                </tr>
            </table>
            <p class="TextP">При оформлении кредита при себе необходимо будет иметь мобильный телефон, также необходимо
                будет сообщить сотруднику кредитного отдела номера рабочего и второго контактного телефонов.</p>
            <p class="TextP">Тарифы, предоставляемые банком:</p>
            <table class="Stylized">
                <tr>
                    <th>Кредитный продукт</th>
                    <th>Сумма кредита, руб.</th>
                    <th>Первоначальный взнос</th>
                    <th>Срок кредита</th>
                    <th>Переплата</th>
                </tr>
                <tr>
                    <td><span class="orange">10–10–10</span></td>
                    <td>5000–200000</td>
                    <td>10%</td>
                    <td>10 мес.</td>
                    <td>1 %/мес.</td>
                </tr>
                <tr>
                    <td>1% в месяц</td>
                    <td>5 000–180 000</td>
                    <td>0–50%</td>
                    <td>3–24 мес.</td>
                    <td>1 %/мес.</td>
                </tr>
            </table>
            <p class="TextP">Способы оплаты:</p>
            <ul class="TextList dash">
                <li><span>терминалы Русского Стандарта (без комиссии);</span></li>
                <li><span>отделения Почты России;</span></li>
                <li><span>другие коммерческие банки;</span></li>
                <li><span>через терминалы оплаты (QIWI, МКБ, Элекснет, CyberPlat, Рапида, TelePay и НКО Лидер).</span>
                </li>
            </ul>
            <p class="TextP">Возможно досрочное погашение кредита. Детальную информацию по предложениям и адресам точек
                погашения кредита
                Вы cможете найти на <a href="http://www.rsb.ru">www.rsb.ru</a> или узнать по телефону <b> 8 (800)
                    200–6–200</b></p>
            <p class="TextP InfoTextClassic">Общие условия кредитования:</p>
            <p class="TextP InfoTextClassic">Сумма кредита: от 5 000 до 200 000 руб.;<br>
                Первоначальный взнос: 0-50% от суммы товара;<br>
                Срок кредита: от 3 до 24 месяцев;<br>
                Процентная ставка: 23,4% годовых;<br>
                Дополнительные комиссии со стороны магазина отсутствуют.</p>
            <p class="TextP InfoTextClassic">Решение о предоставлении либо отказе в предоставлении кредита (без
                объяснения причин) принимает Банк.</p>
            <hr>
        </div>
        <div class="contentBank" id="pochta-bank">
            <hr>
            <img src="../img/pochta-bank.png" class="LogoBanksSmall">
            <div class="logoText">
                <p class="TextP">ПАО «Почта Банк»<br>Лицензия ЦБ РФ №650 от 25.03.2016 г.</p>
            </div>
            <table class="Stylized tableBanksDataLeft">
                <tr>
                    <th>Требования к заёмщику:</th>
                    <th>Документы:</th>
                </tr>
                <tr>
                    <td>
                        <ol class="TextList num">
                            <li>Гражданство РФ</li>
                            <li>Возраст:
                                <ol class="TextList num">
                                    <li>от 21 года до 65 лет для мужчин;</li>
                                    <li>от 18 до 70 лет для женщин;</li>
                                </ol>
                            </li>
                            <li>Постоянная регистрация в любом регионе</li>
                        </ol>
                    </td>
                    <td>
                        <ol class="TextList num">
                            <li>Паспорт гражданина РФ</li>
                        </ol>
                    </td>
                </tr>
            </table>
            <p class="TextP">При оформлении кредита при себе необходимо будет иметь мобильный телефон, также необходимо
                будет сообщить сотруднику кредитного отдела номера рабочего и второго контактного телефонов.</p>
            <p class="TextP">Тарифы, предоставляемые банком:</p>
            <table class="Stylized">
                <tr>
                    <th>Кредитный продукт</th>
                    <th>Сумма кредита, руб.</th>
                    <th>Первоначальный взнос</th>
                    <th>Срок кредита</th>
                    <th>Переплата</th>
                </tr>
                <tr>
                    <td>Я выбираю 0–6*</td>
                    <td>5 000–300 000</td>
                    <td>0%</td>
                    <td>6 мес.</td>
                    <td>0 руб.</td>
                </tr>
                <tr>
                    <td>Я выбираю 10</td>
                    <td>5 000–300 000</td>
                    <td>10%</td>
                    <td>10 мес.</td>
                    <td>1 %/мес.</td>
                </tr>
                <tr>
                    <td>1% переплаты</td>
                    <td>5 000–300 000</td>
                    <td>0, 10, 20, 30 или 40%</td>
                    <td>6–24 мес.</td>
                    <td>1 %/мес.</td>
                </tr>
            </table>
            <p class="TextP InfoText">*Предложение действует не на весь товар. Подробности спрашивайте у менеджеров
                кредитного отдела магазинов АПЕЛЬСИН</p>
            <p class="TextP">Возможно досрочное, частичное или полное погашение кредита в любую дату без комиссий.</p>
            <p class="TextP">Детальную информацию по предложениям и адресам точек погашения кредита Вы cможете найти на
                <a href="http://www.pochtabank.ru">www.pochtabank.ru</a>
                или узнать по телефону <b> 8 (800) 550–07–70</b></p>
            <p class="TextP InfoTextClassic">Общие условия кредитования:</p>
            <p class="TextP InfoTextClassic">Сумма кредита: от 5&nbsp;000 до 300&nbsp;000 руб.;<br>
                Первоначальный взнос: 0-40% от суммы товара;<br>
                Срок кредита: от 6 до 24 месяцев;<br>
                Процентная ставка: от 8,42% до 34,3% годовых;<br>
                Дополнительные комиссии со стороны магазина отсутствуют.</p>
            <p class="TextP InfoTextClassic">Решение о предоставлении либо отказе в предоставлении кредита (без
                объяснения причин) принимает Банк.</p>
            <hr>
        </div>
        <div class="contentBank" id="homeCredit">
            <hr>
            <img src="../img/homeCredit.png" class="LogoBanksSmall">
            <div class="logoText">
                <p class="TextP">ООО «Хоум Кредит энд Финанс Банк»<br>Лицензия ЦБ РФ №316 от 15.03.2012 г.</p>
            </div>
            <table class="Stylized tableBanksDataLeft">
                <tr>
                    <th>Требования к заёмщику:</th>
                    <th>Документы:</th>
                </tr>
                <tr>
                    <td>
                        <ol class="TextList num">
                            <li>Гражданство РФ</li>
                            <li>Возраст от 18 до 70 лет включительно</li>
                            <li>Постоянная регистрация в любом регионе</li>
                        </ol>
                    </td>
                    <td>
                        <ol class="TextList num">
                            <li>Паспорт гражданина РФ</li>
                            <li>Документ на выбор:
                                <ol class="TextList num">
                                    <li>водительское удостоверение;</li>
                                    <li>заграничный паспорт</li>
                                    <li>страховое свидетельство обязательного пенсионного страхования;</li>
                                    <li>пенсионное удостоверение (если заёмщик не работающий пенсионер).</li>
                                </ol>
                            </li>
                        </ol>
                    </td>
                </tr>
            </table>
            <p class="TextP">При оформлении кредита при себе необходимо будет иметь мобильный телефон, также необходимо
                будет сообщить сотруднику кредитного отдела номера рабочего и второго контактного телефонов.</p>
            <p class="TextP">Тариф, предоставляемый банком:</p>
            <table class="Stylized">
                <tr>
                    <th>Кредитный продукт</th>
                    <th>Сумма кредита, руб.</th>
                    <th>Первоначальный взнос</th>
                    <th>Срок кредита</th>
                    <th>Переплата</th>
                </tr>
                <tr>
                    <td>Домашний 2</td>
                    <td>5 000–200 000</td>
                    <td>0-90%</td>
                    <td>от 4 до 36 мес.</td>
                    <td>1,5 %/мес.</td>
                </tr>
            </table>
            <p class="TextListName">Способы оплаты:</p>
            <ul class="TextList dash">
                <li>терминалы Хоум Кредита (без комиссии);></li>
                <li>отделения Почты России;</li>
                <li>другие коммерческие банки;</li>
                <li>система «Рапида» (оплата на кассе в магазинах Эльдорадо, Техносила, Евросеть, Связной, Альт
                    Телеком).
                </li>
            </ul>
            <p class="TextP">Возможно досрочное погашение кредита.</p>
            <p class="TextP">Детальную информацию по предложениям и адресам точек погашения кредита Вы cможете найти на
                <a href="http://www.homecredit.ru">www.homecredit.ru</a>
                или узнать по телефону<b> 8 (495) 785–82–22</b></p>
            <p class="TextP InfoTextClassic">Общие условия кредитования:</p>
            <p class="TextP InfoTextClassic">
                Сумма кредита: от 5 000 до 200 000 руб.;<br>
                Первоначальный взнос: 0-90% от суммы товара;<br>
                Срок кредита: от 4 до 36 месяцев;<br>
                Процентная ставка: 30,4% годовых;<br>
                Дополнительные комиссии со стороны магазина отсутствуют.
            </p>
            <p class="TextP InfoTextClassic">Решение о предоставлении либо отказе в предоставлении кредита (без
                объяснения причин) принимает Банк.</p>
            <hr>
        </div>
        <div class="contentBank" id="renessans">
            <hr>
            <img src="../img/renessans.png" class="LogoBanksSmall">
            <div class="logoText">
                <p class="TextP">КБ «Ренессанс Кредит»<br>Лицензия ЦБ РФ №3354 от 26.04.2013 г.</p>
            </div>
            <table class="Stylized tableBanksDataLeft">
                <tr>
                    <th>Требования к заёмщику:</th>
                    <th>Документы:</th>
                </tr>
                <tr>
                    <td>
                        <ol class="TextList num">
                            <li>Гражданство РФ</li>
                            <li>Возраст от 24 до 70 лет</li>
                            <li>Регистрация постоянная или наличие постоянной работы в регионе оформления</li>
                        </ol>
                    </td>
                    <td>
                        <ol class="TextList num">
                            <li>Паспорт гражданина РФ</li>
                        </ol>
                    </td>
                </tr>
            </table>
            <p class="TextP">При оформлении кредита при себе необходимо будет иметь мобильный телефон, также необходимо
                будет
                сообщить сотруднику кредитного отдела номера рабочего и второго контактного телефонов.</p>
            <p class="TextP">Тарифы, предоставляемые банком:</p>
            <table class="Stylized">
                <tr>
                    <th>Кредитный продукт</th>
                    <th>Сумма кредита, руб.</th>
                    <th>Первоначальный взнос</th>
                    <th>Срок кредита</th>
                    <th>Переплата</th>
                </tr>
                <tr>
                    <td>Доступный 0-6*</td>
                    <td>5 000–250 000</td>
                    <td>0–10%</td>
                    <td>6 мес.</td>
                    <td>0 руб.</td>
                </tr>
                <tr>
                    <td>Доступный 23%</td>
                    <td>5 000–300 000</td>
                    <td>0–90%</td>
                    <td>6–36 мес.</td>
                    <td>1 %/мес.</td>
                </tr>
                <tr>
                    <td>Доступный 21%</td>
                    <td>5 000–300 000</td>
                    <td>0–90%</td>
                    <td>6–36 мес.</td>
                    <td>до 1 %/мес.</td>
                </tr>
            </table>
            <p class="TextP InfoText">*Предложение действует не на весь товар. Подробности спрашивайте у менеджеров
                кредитного отдела магазинов АПЕЛЬСИН</p>
            <p class="TextListName">Способы оплаты:</p>
            <ul class="TextList dash">
                <li><span>терминалы Банка (без комиссии);</span></li>
                <li><span>отделения Почты России (без комиссии);</span></li>
                <li><span>другие коммерческие банки;</span></li>
                <li><span>система «Рапида» (оплата на кассе в магазинах Эльдорадо, Техносила, Евросеть, Связной, Альт Телеком).</span>
                </li>
            </ul>
            <p>Возможно досрочное погашение кредита.</p>
            <p>Детальную информацию по предложениям и адресам точек погашения кредита Вы cможете найти на <a
                        href="http://www.rencredit.ru">www.rencredit.ru</a>
                или узнать по телефону<b> 8 (800) 200–0–981</b></p>
            <p class="TextP InfoTextClassic">Общие условия кредитования:</p>
            <p class="TextP InfoTextClassic">Сумма кредита: от 5&nbsp;000 до 300&nbsp;000 руб.;<br>
                Первоначальный взнос: 0-90% от суммы товара;<br>
                Срок кредита: от 6 до 36 месяцев;<br>
                Процентная ставка: от 21% до 23% годовых;<br>
                Дополнительные комиссии со стороны магазина отсутствуют.</p>
            <p class="TextP InfoTextClassic">Решение о предоставлении либо отказе в предоставлении кредита (без
                объяснения причин) принимает Банк.</p>
            <hr>
        </div>
        <div class="contentBank" id="OTP-bank">
            <hr>
            <img src="../img/OTP-bank.png" class="LogoBanksSmall">
            <div class="logoText"><p class="TextP">АО «ОТП Банк»<br>Лицензия ЦБ РФ №2766 от 27.11.2014 г.</p>
            </div>
            <table class="Stylized tableBanksDataLeft">
                <tr>
                    <th>Требования к заёмщику:</th>
                    <th>Документы:</th>
                </tr>
                <tr>
                    <td>
                        <ol class="TextList num">
                            <li>Гражданство РФ</li>
                            <li>Возраст от 21 года до 65 лет</li>
                            <li>Постоянная регистрация в любом регионе</li>
                        </ol>
                    </td>
                    <td>
                        <ol class="TextList num">
                            <li>Паспорт гражданина РФ</li>
                            <li>Желательно наличие второго документа:
                                <ol class="TextList num">
                                    <li>страховое свидетельство обязательного пенсионного страхования;</li>
                                </ol>
                            </li>
                        </ol>
                    </td>
                </tr>
            </table>
            <p class="TextP">При оформлении кредита при себе необходимо будет иметь мобильный телефон, также необходимо
                будет сообщить сотруднику кредитного отдела номера рабочего и второго контактного телефонов.</p>
            <p class="TextListName">Тарифы, предоставляемые банком:</p>
            <table class="Stylized">
                <tr>
                    <th>Кредитный продукт</th>
                    <th>Сумма кредита, руб.</th>
                    <th>Первоначальный взнос</th>
                    <th>Срок кредита</th>
                    <th>Переплата</th>
                </tr>
                <tr>
                    <td>Смарт 1%</td>
                    <td>5 000–200 000</td>
                    <td>0 или 99%</td>
                    <td>6-24 мес.</td>
                    <td>1 %/мес.</td>
                </tr>
                <tr>
                    <td>Лайк</td>
                    <td>5 000–200 000</td>
                    <td>от 0 до 90%</td>
                    <td>6-36 мес.</td>
                    <td>1 %/мес.</td>
                </tr>
            </table>
            <p class="TextListName">Способы оплаты:</p>
            <ul class="TextList dash">
                <li><span>отделения Банка;</span></li>
                <li><span>отделения Почты России;</span></li>
                <li><span>оплата банковским переводом;</span></li>
                <li><span>платежный сервис QIWI (КИВИ);</span></li>
                <li><span>система «Рапида» (оплата на кассе в магазинах Эльдорадо, Техносила, Евросеть, Связной, Альт Телеком);</span>
                </li>
            </ul>
            <p class="TextP">Возможно досрочное погашение кредита.</p>
            <p class="TextP">Детальную информацию по предложениям и адресам точек погашения кредита Вы cможете найти на
                <a href="http://www.otpbank.ru">www.otpbank.ru</a>
                или узнать по телефону<b> 8 (800) 100–55–55</b></p>
            <p class="TextP InfoTextClassic">Общие условия кредитования:</p>
            <p class="TextP InfoTextClassic">Сумма кредита: от 5&nbsp;000 до 200&nbsp;000 руб.;<br>
                Первоначальный взнос: 0-99% от суммы товара;<br>
                Срок кредита: от 6 до 36 месяцев;<br>
                Процентная ставка: от 21% до 23,3% годовых;<br>
                Дополнительные комиссии со стороны магазина отсутствуют.</p>
            <p class="TextP InfoTextClassic">Решение о предоставлении либо отказе в предоставлении кредита (без
                объяснения причин) принимает Банк.</p>
            <hr>
        </div>
    </div>
    <p class="TextListName">Преимущества:</p>
    <ol class="TextList num">
        <li>Максимально выгодные условия.</li>
        <li>Минимум документов.</li>
        <li>Высокий процент одобрения.</li>
        <li>Получения товара в день оформления*.</li>
        <li>Возможность обмена товара в течении месяца**.</li>
    </ol>
    <!--        <hr>-->
    <p class="TextP InfoText">*Если товар не является заказным.<br>
        **В зависимости от вида товара.</p>

    <p class="TextListName">Адреса магазинов, где доступна услуга:</p>
    <ul class="TextList dash">
        <li>г. Рязань, Окружная дорога, 185 км / тел.: 8(4912) 24-02-20 доб.: 3047</li>
        <li>г. Рязань, ул. Есенина, д.13 / тел.: 8(4912) 24-02-20 доб.: 5161</li>
        <li>г. Рязань, ул. Шабулина, д. 24Б / тел.: 8(4912) 950-395 доб.: 3531</li>
        <li>г. Луховицы, ул. Пушкина, 170 / тел.: 8(496) 639-6100 доб.: 2118</li>
        <li>г. Коломна, пр. Озерский, 1 / тел.: 8(496) 610-00-06) доб.: 6029</li>
    </ul>

    <div class="blockAnchor"><a name="bonus_program"></a></div>
    <h1>Программа БОНУС</h1>
    <p class="TextP">Внимание! Представляем Вам Программу "БОНУС". Программа "БОНУС" - это вознаграждение в виде
        Бонусных баллов за каждую покупку в наших магазинах.
    <p class="TextP">Это Просто - покупай и накапливай баллы.
    <p class="TextP">Это Выгодно - оплачивай баллами следующую покупку.
        <!--    <p class="TextP">Внимание! Оплачивай бонусами в каждую субботу!-->
    <p class="TextP InfoText">* Участие в Программе доступно только физическим лицам. Единовременно Бонусными баллами
        можно оплатить до 20% цены товара. 1 Балл эквивалентен 1 рублю. Компания АПЕЛЬСИН оставляет за собой право
        изменить Условия участия в Программе в одностороннем порядке.

    <p class="bonus_head" title="Нажмите для получения полной информации">Правила участия в программе бонус</p>
    <ol class="TextList num" id="bonus_hide">
        <li>Общая информация.
            <ol class="TextList num">
                <li>Получая Карту АПЕЛЬСИН, Вы становитесь Участником Программы Бонус.</li>
                <li>Карта действует во всех магазинах розничной сети АПЕЛЬСИН, расположенных на территории РФ.</li>
                <li>Участие в Программе доступно физическим лицам гражданам РФ старше 18 лет.
                    Юридические лица, предприниматели совершающие покупки в
                    коммерческих целях, не могут стать Участниками индивидуальные Программы.
                </li>
            </ol>
        </li>
        <li>Статус Карты.
            <ol class="TextList num">
                <li>Существует четыре статуса Карты (мелкий ОПТ, средний ОПТ, ОПТ, крупный ОПТ),
                    выдаваемых Участнику Программы. Статус карты зависит от накопленной
                    суммы покупок, совершенных при предъявлении уже имеющейся Карты, или
                    суммы единовременной покупки при оформлении новой Карты.
                </li>
                <li>Если общая сумма покупок, совершенных при предъявлении Карты одного
                    типа, соответствует большему номиналу, то осуществляется автоматический
                    перевод карты в новый статус. Накопленная сумма покупок и накопленные
                    Бонусные баллы остаются на Карте.
                </li>
            </ol>
        </li>
        <li>Начисление Бонусных баллов.
            <ol class="TextList num">
                <li>В рамках действия Программы на Карту начисляются Бонусные баллы,
                    которые могут быть использованы при последующих покупках в магазинах
                    АПЕЛЬСИН. Количество Бонусных баллов, зачисляемых на Карту, зависит
                    от суммы покупки, наименования товара и не зависит от ее статуса.
                    Подробную информацию о возможности начисления бонусных баллов за
                    конкретный товар Вы можете уточнить у продавцов-консультантов.
                </li>
                <li>Бонусные баллы зачисляются на Карту в течении суток с момента покупки.</li>
                <li>При совершении покупки Бонусные баллы начисляются только при предъявлении Карты.</li>
                <li>На сумму покупки, оплаченную Бонусными баллами, Бонусные баллы не начисляются.</li>
            </ol>
        </li>
        <li>Использование Бонусных баллов.
            <ol class="TextList num">
                <li>Начисленные на Карту Бонусные баллы могут быть потрачены при
                    совершении последующих покупок в магазинах розничной сети
                    АПЕЛЬСИН с понедельника по субботу (при условии работы магазина).
                    Один Бонусный балл эквивалентен одному рублю.
                </li>
                <li>Единовременно Бонусными баллами можно оплатить до 20% цены товара.</li>
                <li>В случае возврата товара, оплаченного Бонусными баллами, владельцу
                    Карты возвращаются уплаченные средства; израсходованные Бонусные
                    баллы восстанавливаются на счете Карты (через сутки); денежные
                    начисленные за покупку Бонусные баллы аннулируются. При возврате
                    части покупки использованные Бонусные баллы восстанавливаются
                    пропорционально сумме возврата.
                </li>
            </ol>
        </li>
        <li>Списание Бонусных баллов.
            <ol class="TextList num">
                <li>Начисленные Бонусные баллы являются срочными.
                    Срок действия Бонусных баллов ограничен и
                    составляет 180 дней с момента зачисления на
                    карту. Неиспользованные баллы сгорают по окончанию
                    срока действия программы. Бонусные баллы аннулируются.
                </li>
            </ol>
        </li>
        <li>Иные условия.
            <ol class="TextList num">
                <li>В случае утери Карты, новая может быть выдана при предъявлении
                    документа удостоверяющего личность и наличии чека, по которому
                    совершались покупки с предъявлением Карты. Утерянная Карта блокируется по заявлению клиента, общая
                    сумма покупок и Бонусные баллы, накопленные на утерянной Карте,
                    переносятся на новую. При несовпадении данных, указанных в
                    паспорте, с данными указанными в Анкете, Карта не восстанавливается.
                </li>
                <li>Карта является собственностью сети магазинов АПЕЛЬСИН и должна быть
                    безвозмездно возвращена собственнику по первому его требованию.
                </li>
                <li>Участник может направлять свои претензии Компании любым удобным для него способом.</li>
                <li>Компания АПЕЛЬСИН оставляет за собой право изменить Условия участия в
                    Программе в одностороннем порядке, информация об изменениях
                    доступна на сайте WWW.APELSIN.RU.
                </li>
            </ol>
        </li>
    </ol>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>