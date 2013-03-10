The Guide to Git (WINDOWS)
================

About This Workshop
------------------
This workshop is intended for people who don't know anything about source control in general. The main focus of this workshop is to get you to be familiar with the general concept of source control. We are just using Git as an example, so this workshop does NOT cover how Git works in depth. You will learn basic source control concepts such as committing, pushing, merging, etc. in the context of Git but they are more or less the same in other source control systems such as Subversion and Bazaar. 

General Info

- Main operating system: Windows 7
- Applications Needed:
    - GitHub Client
    - VIM [mandatory] --Just kidding. Choose your own preferred text editor.

Goals of this Workshop

- Learn the basic concepts and techniques of source control.
- Get you guys aware of source control.
- Learn why source control is important and how it's there to help you.
- Learn how to collaborate on software projects with source control.
- Learn what issues you might run into.	

What the heck is Source Control?
---------------------------------
Source control (aka version control aka revision control) lets you track your files over time and any changes that you make to your files. You've probably already used your own kind of source control system without even realizing it. For example, you may have these kinds of files somewhere on Dropbox or your local computer:

- myResumeOct2009.doc
- myResumeMar2010.doc
- logo-old.png
- logo-new.png

It's why there exists the "Save As" option. You want the new file without losing the old one just in case you completely mess up something and want to go back when everything was okay. 

Some common solutions include:

- Making a single backup copy (Document.old.txt)
- Adding a version number or date to the file name: doc_v1.txt, doc_march2007.txt
- We may even use a shared folder so other people can see and edit files without sending them over e-mail (Dropbox). Hopefully they relabel the file after they save it.

If all the above is already working for us, why do we need a version control system (VCS)?

Sharing folders and the naming system works fine for small class projects or one-time papers. But software projects? Not a chance.

Imagine working on a software project that requires at least 50 separate files. Then imagine having to work with another person on each file. If you wanted to use the same technique mentioned above (just renaming files), you'll have to spend a lot of time reading and looking for the changes that your buddy made and then copying and pasting code. A lot of the time, you will miss a small change that your buddy did and your program will crash and you will be very sad at the end of the day.

That is why you need a VCS system. A good VCS system does the following things:

- Backup and Restore. Files are saved as they are edited, and you can jump to any moment in time. Need that file as it was on Feb 23, 2007? No problem.
- Synchronization. Lets people share files and stay up-to-date with the latest version.
- Short-term undo. Monkeying with a file and messed it up? (That’s just like you, isn’t it?). Throw away your changes and go back to the “last known good” version in the database.
- Long-term undo. Sometimes we mess up bad. Suppose you made a change a year ago, and it had a bug. Jump back to the old version, and see what change was made that day.
- Track Changes. As files are updated, you can leave messages explaining why the change happened (stored in the VCS, not the file). This makes it easy to see how a file is evolving over time, and why.
- Track Ownership. A VCS tags every change with the name of the person who made it. Helpful for blamestorming giving credit.
- Sandboxing, or insurance against yourself. Making a big change? You can make temporary changes in an isolated area, test and work out the kinks before “checking in” your changes.
- Branching and merging. A larger sandbox. You can branch a copy of your code into a separate area and modify it in isolation (tracking changes separately). Later, you can merge your work back into the common area.

This description was copied from [betterexplained.com](http://betterexplained.com/articles/a-visual-guide-to-version-control/).


Register for GitHub account.
----------------------------

- Go to [github.com](http://github.com) and sign up for an account.


Install GitHub application.
----------------------------

- While still signed in your new GitHub account (on github.com), scroll down to the footer and look for "Applications." Click the link that matches your operating system. For this workshop, we will be installing for Windows operating system. 
- Welcome Screen will appear (show screenshot).
- Go through configuration steps or set up account later.
- Yay! You are now ready to use GitHub!

First Repository
----------------
You can think of repository like a box for your code. Git will keep track of this box for any changes and will notify you if there is a change. 

Add your first repository by clicking on the add button in GitHub. 

[insert image here]

Hurray! You have just created your first repo :)

Now add files to your repository and make your first commit.


First Commit
------------
When you install GitHub, it automatically makes a directory called "GitHub" probably in your Documents folder unless you specified it to be somewhere else. The GitHub folder will be where all your repositories sit. If you want to add files and folders into your repository, all you do is go to your Documents > GitHub directory and put the files in the repository folder (see picture below). 

[insert image of files being added to empty repository here]

GitHub will recognize a change in the repository and ask you to commit (or in other words, it asks you if you want to update the folder you just added the file to).

[insert image of GitHub recognizing a change in the repository and asking to commit]

It's really important to be short but descriptive when you make commits because you'll likely forget what stuff you changed and what version you might want to go back to. Also it helps when you're collaborating so other people know what changes to look for when they read your code. 

Go ahead and fill out the commit descriptions and click commit. 

Adding this file can be considered your first commit. So congratulations, you have successfully made your first commit! 

COOL TIP
On GitHub.com, you can comment on others' (and your own) commits.

[image of commenting on a commit]

Subsequent Commits
------------------
After making your first commit, you're going to want to make more changes to your files and repositories. This is when magic things happen, but magic isn't always beautiful.

Like mentioned before, GitHub will recognize the changes you make in your repositories. What's great about GitHub is that it makes it clear which things were removed, changed, and added. 

[image of changed code - show the color changes]

You can review the changes that were made before you commit. If you see something that shouldn't be there, you can go back to your code and fix what needs to be fixed before you commit. 

BRANCHING
A very important concept of source control is BRANCHING.

Let's say that you have this awesome idea for a new layout but you're not sure how exactly everything is going to work so you want to start a new version from what you have so far (or maybe a completely new version of the project). This is called "branching" because you're branching off and going another direction but you still have the path to go back to where you came from.




Code Collaboration
------------------

CLONING
Someone starts a repository. Another person can "clone" the repository onto their local drive.
That same person can add as many collaborators to the repository.
Once added to the repository, you can start committing and merging stuff in the repository.


