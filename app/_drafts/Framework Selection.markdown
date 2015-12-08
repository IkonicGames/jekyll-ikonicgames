---
layout: post
title:  "Framework Selection"
tags:   template
date:   2015-10-25 23:59:59
image:  /assets/images/blog/11-18-2015.jpeg
image-attrib:   https://unsplash.com/photos/CoD2Q92UaEg
comments: true
author: Erin Gunn
categories: jekyll update
---

Choosing the correct game framework can be tricky, and is something that a lot of developers can have issues with.  If you are looking for the right framework to develop and release your game(s), it is critical that you take a directed and objective approach, otherwise you may find yourself playing with every framework under the sun or having to switch frameworks halfway into development.

To help ensure that you don't find yourself in a bad situation in the future, I have outlined the that I followed recently to select an HTML5 framework.  It really wasn't that difficult and the amount of time it saved me is likely HUGE.

Here is a quick outline of the process:

1. [**Goal Definition**](#GD)
2. [**Requirements Development**](#RD)
3. [**Gather Solutions**](#GS)
4. [**Evaluation**](#EV)
5. [**Prototype**](#PR)
6. [**Decision**](#DE)

<a name="GD"></a>

###Goal Definition###
***

I assume that if you are reading this, you already have a goal.  However, you need to put it into words before you can move forward with any real sense of direction.  For our purposes, a 2-3 sentence goal is likely good enough.  Here is my goal statement for this process:

> I want to rapidly develop casual, cross-browser, HTML5 games.  These are games that I should be able have 100% ready for licensing within the span of 2 weeks.



<a name="RD"></a>

###Requirements Development###
***

Developing requirements is one of those *black arts* of software engineering.  It isn't particularly hard, it's just hard to define in a manner general enough for different projects.  The good news is my requirements should serve as a good jumping off point for every project.

*	**Requirements**
	*  Crossplatform - HTML5, Mobile
	*  Easy Development on Mac
	*  WebGL with Canvas fallback
	*  Mature/Stable/Feature Complete
	*  Active Community
	*  Documentation
	*  Cheap (< $100)
*	**Wants**
	*  Crossplatform - Flash, Desktop, Consoles
	*  Examples
	*  Haxe
	*  Visual Editor
	*  Enitity Component/Entity Component System

Now all that is really left is to modify that list to meet your needs.  Make sure that you have the correct platform(s) listed, any key rendering requirements or maybe you want proprietary instead of FOSS.  There are a million requirements that you may have.  Some are significantly more important than others(GLSL 3.0, PS4 deployment options, etc.) and some are implied.  Depending on the size of your project and team, you can take liberties with this list.

Just be sure that they are clear enough that you are looking only at engines that fit your needs.

<a name="GS"></a>

###Gather Solutions###
***

Now you are ready to collect a list of frameworks to evaluate.  All you need to look for at this point are frameworks that appear to meet all of your requirements and some of your wants.  Some quick googling and forum searches will most likely net you the top contenders.  Just take a quick look at the features for each engine and you should be good to go.

These are the frameworks that I ended up gathering for through my searching.  I have had some experience with the vast majority of them so this step went quickly for me.  If this is the first time you have made a game that had the requirements you are looking for, it is generally best to find the engines that are most popular and add them to your list first.

*  [Phaser](http://phaser.io/)
*  [MelonJS](http://melonjs.org/)
*  [KiwiJS](http://www.kiwijs.org/)
*  [PandaJS](http://www.pandajs.net/)
*  [HaxeFlixel](http://haxeflixel.com/)
*  [Flambe](http://getflambe.com/)
*  [Game Maker Studio](http://www.yoyogames.com/studio)
*  [Construct 2](https://www.scirra.com/)
*  [GDevelop](http://compilgames.net/)

<a name="EV"></a>

###Evaluation###
***

At this point you want to figure out which engines actually fit your needs. To do this, simply create a spreadsheet of the frameworks and how they match up with the requirements.  This is often referred to as a [Feature Comparison Matrix](https://www.google.com.ec/search?q=feature+comparison+matrix&espv=2&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiLw_Thh8vJAhVH2B4KHfAFDpIQ_AUIBygB&biw=1440&bih=805).  Yours doesn't need to look as nice as some of those do.  Function over form in this case.  Just make a quick spreadsheet.

Now that you have your FCM, you are ready to sort it.  You want the best fit at the top and the worst at the bottom.  However, this matrix alone isn't going to make that particularly easy.  To really do a good job at this, you need to familiarize yourself with each framework, one at a time.  Not to gain an expert understanding of each, simply to be confident that it actually fits your requirements and that there are no obvious surprises.

So, one at a time, go through the documentation of each framework, lookin for your requirements, deciding that each requirement is meet, and taking notes where necessary.  For an example of notes that you might take, take a look at the *Mobile* column in my FCM below.  You can see that I specifically mentioned Adobe Air and Native for a couple of the platforms.  That helped me differentiate some publishing processes as well as end product quality without having to add another column.

[![HTML5 Game Framework Evaulation Matrix](/assets/images/blog/HTML5EngineEvaluation.png)](/assets/images/blog/HTML5EngineEvaluation.png "HTML5 Game Framework Evaluation Matrix"){:target="_blank"}

<a name="PR"></a>

###Prototype###

Now comes the fun part.  Make some games!  Ok, just prototypes, but you get the idea.

The purpose of this step is to actually try out some of the features of the best engines on your list.  So pick the top three engines and complete a prototype with each that includes the following:

*	**Implement your core game mechanic.**  Or just A game mechanic if you don't have a particular game in mind or your core mechanic is too complicated to prototype a couple of times.
*	**Include placeholder graphics, sounds and work with config files.**  You want to try out the asset pipeline.
*	**Create a bare minimum menu system.**
	*	Main Menu - Play button.
	*	Pause Menu - Resume, restart, quit buttons.
	*	Game Over Menu - Play again and quit buttons and display high score.
*	For any of your requirements that are not necessarily generic, **implement the bare minumum to test out how that requirement works in each framework.**

There will be some headaches along the way, especially as you try to figure out how to solve the same problems with different systems, but the knowledge you gain simply by making a crappy prototype will help *immensely* in your decision.  A nice side bonus is this will help you find better solutions to each problem each time as well.

While it is not necessary to finish and polish the prototypes, you should at least have a solid understanding of the core of each engine by the time you complete them.

<a name="DE"></a>

###Decision###

Finally, it is time to make your choice.  Depending on the type of game frameworks you are trying out, this process could take you a day or a couple of weeks.  Either way, you have made it.  You have gathered the information you needed so that you could make an informed decision with confidence.

If you find that the decision isn't clear at this point, it is worth it to step back from the actual decision and simply think about *why* it isn't clear.  Once you have this figured out, you have your new goal and you simply need to evaluate the engines and potentially do a bit more prototyping until you reach a conclusion.