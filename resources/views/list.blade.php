<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    </link>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    </link>
    <!-- Styles -->
    <style>
        @font-face {
            font-family: "MyWebFont";
            src: url("/fonts/font.woff2") format("woff2");
        }

        body {
            background: url('https://i.gifer.com/embedded/download/NWIw.gif');
            font-family: 'MyWebFont', sans-serif;
            /* Background image is centered vertically and horizontally at all times */
            background-position: center center;

            /* Background image doesn’t tile */
            background-repeat: no-repeat;

            /* Background image is fixed in the viewport so that it doesn’t move when
the content’s height is greater than the image’s height */
            background-attachment: fixed;

            /* This is what makes the background image rescale based
on the container’s size */
            background-size: cover;

            /* Set a background color that will be displayed
while the background image is loading */
            background-color: #464646;
        }

        header {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            font-family: 'MyWebFont', cursive;
            font-size: 3.5em;
            line-height: 90%;
            margin-top: 50px;
        }

        .main {
            margin: 0 20% 0;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
        }

        header p {
            font-size: .9em;
        }

        header input {
            height: 30px;
            border: none;
            width: 83%;
        }

        .error::placeholder {
            color: red;
        }

        button {
            border: none;
            border-radius: 2px;
            width: 15%;
            background: #B266FF[];
        }

        header form {
            background-color: white;
            border-radius: 3px;
            padding: 5px;
            width: 60%;
            margin: 20px 0;
            display: flex;
            justify-content: space-between;
        }

        ul {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 5%;
            border-top: 4px ridge #B266FF;
            border-bottom: 4px ridge #B266FF;
        }

        li {
            list-style: none;
            border: 1px solid purple;
            box-shadow: 2px 2px 5px grey;
            border-radius: 3px;
            margin: 0%;
            flex-grow: 1;
            padding: .75em;
            height: 100%;
        }

        li span {
            display: block;
            font-size: 1.75em;
        }

        li input[type=text] {
            width: 20%;
            font-size: 1.75em;
        }

        li label {
            display: block;
            color: grey;
            margin-top: 5%;
        }

        .checked {
            display: none;
        }

        li button {
            margin-right: 5%;
            width: 100%;
        }

        .responded {
            border: 1px solid lightgrey;
            box-shadow: 4px 4px 5px grey;
        }

        footer {
            text-align: center;
            margin: 15px;
            color: grey;
        }

        a {
            text-decoration: none;
            color: grey;
        }

        @media (max-width: 768px) {

            header form {
                flex-direction: column;
                width: 80%;
            }

            header button,
            header input {
                width: auto;
            }

            .main {
                margin: 0 7% 0;
            }

            h2 {
                margin: 0;
            }

            .main>div {
                margin: 15 px 0;
                font-size: .8em;
            }

            li input[type=text] {
                font-size: 1.65em;
            }
        }
    </style>
</head>

<body>
    @if (Auth::user() && Auth::user()->role == 'admin')

    <div class="wrapper">
        <header>
            <h1>Guest List</h1>
            <p>- Checked In Guests-</p>
            <form action="{{url('create')}}" method="post">
                @csrf
                <input type="text" name="name" placeholder="Enter Name ...">
                <button type="submit" name="submit" value="submit">Add</button>
            </form>
        </header>

        <div class="main">
            <h2>Invitees</h2>
            <ul id="invitedList">
                @foreach ($payments as $payment)
                <form action="{{url('edit', ['id' => $payment['id'] ] )}}" method="post">
                    @csrf
                    <li class="">

                        <span>{{$payment['name']}}</span>
                        <label for="">Arrived

                            @if($payment['checked']== 1)
                            <input name='checked' onchange="this.form.submit()" checked type="checkbox">
                            @else
                            <input name='checked' onchange="this.form.submit()" type="checkbox">
                            @endif
                </form>
                </label>
                <button type="button">edit</button type="button">

                <form action="{{url('delete', ['id' => $payment['id'] ] )}}" method="post">
                    @csrf
                    <button type="submit">remove</button type="button">

                </form>


                </li>


                @endforeach
            </ul>
        </div>
    </div>
    @else
    <div>
        <img src="https://i.gifer.com/y7.gif" alt="">
    </div> @endif
    <footer>by <a href="https://www.instagram.com/apex.cologne">APEX EVENTS</a></footer>
</body>

</html>
</body>

</html>
<script src="{{ mix('/js/app.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('register'); //const because we wont be assigning any different value to form
        const input = form.querySelector('input'); //reads what was put into form
        const mainDiv = document.querySelector('.main');
        const ul = document.getElementById('invitedList');

        const div = document.createElement('div');
        const filterLabel = document.createElement('label');
        const filterCheckBox = document.createElement('input');

        filterLabel.textContent = "Arrived @ Party? ‏‏‎ ‎ ";
        filterCheckBox.type = 'checkbox';
        div.appendChild(filterLabel);
        div.appendChild(filterCheckBox);
        mainDiv.insertBefore(div, ul);
        filterCheckBox.addEventListener('change', (e) => {
            const isChecked = e.target.checked;
            const lis = ul.children;



            if (isChecked) {
                for (let i = 0; i < lis.length; i++) {
                    let li = lis[i];
                    let confirmedLabel = li.firstChild.nextSibling;
                    if (li.className === 'responded') {
                        li.style.display = '';
                        li.style.height = '100%';
                        confirmedLabel.style.display = 'none';
                    } else {
                        li.style.display = 'none';
                    }
                }
            } else {
                for (let i = 0; i < lis.length; i++) {
                    let li = lis[i];
                    let confirmedLabel = li.firstChild.nextSibling;
                    li.style.display = '';
                    li.style.height = '100%';
                    confirmedLabel.style.display = '';
                }
            }

        });

        function createLi(text) {
            function createElement(elementName, property, value) {
                const element = document.createElement(elementName);
                element[property] = value;
                return element;
            }

            function appendToLi(elementName, property, value) {
                const element = createElement(elementName, property, value);
                li.appendChild(element);
            }

            const li = document.createElement('li');

            appendToLi('span', 'textContent', text);

            const label = createElement('label', 'textContent', 'Arrived ‏‏‎ ‎');

            const checkbox = createElement('input', 'type', 'checkbox');

            label.appendChild(checkbox);
            li.appendChild(label);

            appendToLi('button', 'textContent', 'edit');

            appendToLi('button', 'textContent', 'remove');

            return li;
        }

        form.addEventListener('submit', (e) => { //submit event listener instead of click so it runs if someone clicks enter after typing
            //e.preventDefault(); //stops page from trying to submit to server and reloading when e happens
            if (input.value === '') {
                input.placeholder = "Please enter guest name.";
                input.className = 'error';
            } else {
                const text = input.value;
                input.value = ''; //clears form after submit
                input.placeholder = "Invite Someone";
                input.classList.remove("error");
                const li = createLi(text);

                ul.appendChild(li);

            }
        });

        ul.addEventListener('change', (e) => {
            const checkbox = event.target;
            const checked = checkbox.checked;
            const listItem = checkbox.parentNode.parentNode; //goes to label then li

            if (checked) {
                listItem.className = 'responded'
            } else {
                listItem.className = '';
            } //changes className for CSS styling changes

        });

        ul.addEventListener('click', (e) => { //removes li on button click
            if (e.target.tagName === 'BUTTON') {
                const button = e.target;
                const li = e.target.parentNode;
                const ul = li.parentNode;
                // const value = document.getElementById(li).value;

                if (button.textContent === 'remove') {
                    console.log(button, li, ul);
                    ul.removeChild(li);
                    li.submit();

                } else if (button.textContent === 'edit') {
                    const span = li.firstElementChild;
                    const input = document.createElement('input');
                    input.type = 'text';
                    input.value = span.textContent;
                    li.insertBefore(input, span);
                    li.removeChild(span);
                    button.textContent = 'save';
                } else if (button.textContent === 'save') {
                    const input = li.firstElementChild;
                    const span = document.createElement('span');
                    span.textContent = input.value;
                    li.insertBefore(span, input);
                    li.removeChild(input);
                    button.textContent = 'edit';
                }
            }
        });

    }); //end DOMContentListener

    remove = () => {

    }
</script>