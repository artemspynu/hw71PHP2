# Tests

    input, expected_output

# Strings (login)

    'user name', 'username'
    'us(er_name', 'username'
    'user@name10', 'username10'
    'user#name', 'username'

# Integers

    '10', 10
    'a10', 10
    '1_0', 10
    '10#', 10

# Float

    '10', 10.0
    'test', 0.0
    '34,6', 34.6
    '34.6', 34.6

# Boolean

    'off', false (HTML checkboxes)
    'on', true
    1, true
    0, false
    'string', true

# Email

    'jo#hn@doe.com', 'john@doe.com' 
    'john@do_e.com', 'john@doe.com' 
    'john@doe.1com', 'john@doe.com' 
    'jo-hn@doe.com', 'john@doe.com' 

# URL

    geekbrains.com/blog/page?id='10&view=user, geekbrains.com/blog/page?id=10&view=user
    geekbrains.com/blog/page?id=10&view=\user, geekbrains.com/blog/page?id=10&view=user
    geekbrains.com/blog/page?id=10&view=user, geekbrains.com/blog/page?id=10&view=user
    geekbrains.com/blog/page?id=<10>&view=user, geekbrains.com/blog/page?id=10&view=user

# isEmail

    'john@doe.com', true
    'johndoe.com', false
    'john@doe.1com', false
    'jo hn@doe.com', false