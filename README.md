# Recruitment Exercise
Please review src/refactor-me.php which contains code that desperately needs improving.  There are a number of bugs and design flaws in it that need addressing.

The task is to refactor this code so that it is functional and also much improved from its current state.  Feel free to refactor as much as you like but we'd ask that you don't use a full framework for your test, though we're happy for you to pull in selected components/libraries.  We want you to consider how the code can be improved; is it maintainable, how can it be made to adhere to best practice. 

Note, to do well in this test you will need to refactor the code into multiple files.  We would anticipate that a good submission should take no longer than 2-4 hours though better submissions are likely to be towards the end of that.  Please note that submissions with automated tests are preferred. 

To complete the exercise, please fork this repository and work directly in your fork. Once you've finished create a Pull Request back to this repository so we can view the diff.

## Docker
We have included a docker setup to allow you to get up and running quickly with this example, though you are under no obligation to use this.  After you have installed docker and forked the repository you will need to:

* Run `docker-compose up` 
* The sample sql should automatically run 
* Visit http://localhost:8080 in your browser

---

## Notes about the task I did

- I have not yet created the unit tests, I can do it also at the weekend.
- After several attempts to up the native `docker-compose` application, unfortunately I had to use a `laradock` that was effective enough, I left a folder with the settings I used, in my case it was in windows environment.
- I started trying to reuse some things like `mysqli`, but I changed my mind and decided to use `Eloquent` though still maintaining the simplicity of the application without a framework.
- I also send some screenshots of the running application, any questions I am at disposal.

### Index
![PageOne](https://i.imgur.com/B6v4ydO.jpg)

### Bookings
![bookings](https://i.imgur.com/bo5i6ZW.jpg)

