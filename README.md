# blackjack
black jack OOP PHP
Title: OOP: Blackjack

    Repository: php-blackjack
    Type of Challenge: Learning challenge
    Duration: 2 days
    Team challenge : solo

Coach advice

Before giving this exercise it might be a good advice to give some live coding lesson about Objects and Classes.
Learning objectives

    A first dive into OOP (object oriented programming)

The Mission

Let's make a game in PHP: Blackjack! To keep the code structured we are going to use objects!

If this is still an unclear subject for you don't feel bad to google some basic OOP articles, or ask your coach. This is a really complex subject!
Blackjack Rules

    Cards are between 1-11 points.
    Getting more than 21 points, means that you lose.
    Getting 21 points with your first two cards, means you have a blackjack.
    To win, you need to have more points than the dealer, but not more than 21.
    The dealer is obligated to keep taking cards until they have at least 15 points.

Instructions

    Create a class called Blackjack in the file blackjack.php.
    Add three methods to this class:
        Hit
        Stand
        Surrender
    Hit should add a card between 1-11.
    Stand should end your turn and start the dealer's turn. (Your point total is saved.)
    Surrender should make you surrender the game. (Dealer wins.)
    Add a property to this class called score. This property should have the value of the player's score at all times.
    Create a button on home.php that starts the game when pushed, it should go to game.php.
    On game.php instantiate the Blackjack class twice, insert it into a player variable and a dealer variable
    Save these instances in the session (you're gonna need them)
    Use forms to send to the game.php page what the player's action is. (i.e. hit/stand/surrender)
    Use the class' methods to react to these actions.
    The final result should be the following:
        When you hit the server should draw a card between 1-11, and add it to your total score.
        If you reach >21, then the page should tell you you lost.
        If you stand before that, the dealer starts drawing cards until he reaches >15.
        The server then needs to check the difference between your result and that of the dealer.
        The person with the biggest score (that is still lower than 22) wins the hand (If equal the dealer wins).
        As a final option: at any point you need to be able to click surrender after which the page tells you you lost and simulates the dealer's score.

    © 2020 GitHub, Inc.
    Terms
    Privacy
    Security
    Status
    Help

    Contact GitHub
    Pricing
    API
    Training
    Blog
    About

