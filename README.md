_[Wallas](http://wallas.guillecura.co/)_ emerges as a personal project to control accounting and tax calculations of a small business. The idea is pretty simple, a user signs up and it will automatically generate a company under his name. This new company is like a "savings" account, where the user can add, edit or remove income has been or is saving. Once logged in, the user can create a new company under his name. The data and taxes that will be shown depends on the type of company that created.

After initial setup it only takes the user to enter the company incomes in the right dates. The dashboard shows his companies, each with its monthly summary of net income, fluids and tax rate in relation to the invoice is displayed. On the other hand there's an admin panel to edit the default company types and values of the various taxes that may exist, in addition to editing the contents of the public website, users and his businesses created.

I developed the application using PHP, MySQL and Sass. I left aside any framework because I took the project itself as a way to strengthen my knowledge in these technologies. In addition to technology selection and development, also generated a simple color system to generate an attractive user interface. The main color palette includes the following colors:

**<i style="background-color: #00a99d; color: #fff; font-size: .75em; font-style: normal; border-radius: 5px; display: inline-block; text-align: center; line-height: 60px; height: 60px; width: 100px;">#00A99D</i> <i style="background-color: #3d5159; color: #fff; font-size: .75em; font-style: normal; border-radius: 5px; display: inline-block; text-align: center; line-height: 60px; height: 60px; width: 100px;">#3D5159</i> <i style="background-color: #ff834d; color: #fff; font-size: .75em; font-style: normal; border-radius: 5px; display: inline-block; text-align: center; line-height: 60px; height: 60px; width: 100px;">#FF834D</i>**

---

One of my favorite parts in each project is to create or participate in creating its logo or identity. So obviously I began to sketch -almost immediately- possible logos for this application, and I started first with complex frames, mostly related to wallets, but after a while, I ended up with a simple calligraphic logo.

![Logo sketch](/content/images/2016/02/was-logo_01.jpg)

After defining the basic curves and font weights I redraw the letters and adjusted the stroke width using Illustrator.

![Logo path](/content/images/2016/02/was-logo_02.png)

After cleaning some strokes and adjust small details, the logo was as follows:

![Wallas Logo](/content/images/2016/02/was-logo_03.jpg)

---

###Landing Page
![Wallas landingpage](/content/images/2016/02/landing.png)

[This page](http://wallas.guillecura.co/landingpage.php) is basically a static page, aimed primarily at new users and to promote the app. The message content and images are variables assigned from the administration panel.

---

###Basic layout
![Wallas layout](/content/images/2016/02/UI.jpg)

The [application](http://wallas.guillecura.co/) is divided into five sections. Once logged in, users access the dashboard where they can see a summary of each businesses, its details and also edit, add, or remove any income. There's a months selector in this view and the current month is displayed by default.

![Wallas dashboard](/content/images/2016/02/wallas-1.gif)

The summary section lists the monthly detail for the current year. You can choose the view for months, a specific month, or even watch the annual breakdown of each company registered by the user. Each item details the subtotal, total, detailed taxes and the tax percentage relative to total income. The lower the percentage, the more profitable is income.

![Wallas dashboard](/content/images/2016/02/wallas-summary.gif)

Then, the users have their public profile. In this section users can see their personal details, edit contact details, enter new businesses and even edit businesses already entered. From this view users can update their password, logout, and in the worst case, delete their account.

![Wallas dashboard](/content/images/2016/02/wallas-profile.gif)

In the charts section, the monthly values for each subtotal and total are compared. The chart displays each months value for a year.

There is also a section for quick calculations. Where a value is entered and the app automatically calculates taxes and percentage for the types of company registered by the user. These data works as example, and will not be saved by _Wallas_, the section is aimed, above all, as a quick reference.

---

###Admin Panel layout

From the [admin panel](http://wallas.guillecura.co/admin/) users with admin permissions can edit data from other users, assign system created businesses, create new businesses, edit tax percentages of the types of business and even change the information on the landing page.

![Wallas admin](/content/images/2016/02/admin.jpg)

_This post was originally posted in [guillecura.co](http://guillecura.co/wallas/)._
