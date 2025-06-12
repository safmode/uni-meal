# Title: UNIMEAL

__Group Members:__
1. __AHMAD ADAM DANIAL BIN AB RAHMAN__ and __2319525__
2. __TENGKU MUHAMMAD ABDUH BIN TENGKU MOHAMAD ZULKIFLI__ and __2219029__
3. __MUHAMMAD MUIZZUDDIN BIN AMIN__ and __2220323__
4. __NURFARAH HANIS BINTI ISMAIL__ and __2226488__
5. __NUR SAFIAH ASHIQIN BINTI SHUHANIZAL__ and __2317618__


## 1.0 Introduction

Food service is one of the important criteria for having a comfortable life as a university student. Throughout the time, the increasing number of students in IIUM had addressed the new problem of the efficiency and services of cafeteria food on the campus. Therefore, UniMeal is introduced to solve this problem. A redesigned web application called UniMeal gathers student orders for food and displays the menus from several cafeterias around IIUM. The main target audience of this web application is IIUM students and also the Mahallah Cafeteria. Students will have better food services to buy food, and the Mahallah Cafeteria will also get the benefit of having a lot of online orders. UniMeal's main goal is to give students access to online apps that will enhance the effectiveness of food services at IIUM in the future.


## 2.0 Objectives
The primary objective of the UniMeal is:
- To provide wide-range of food selection to IIUM student within one centralised platform
- To enhance order efficiency and convenience for food ordering around IIUM.
- To support IIUM community and collaboration on promoting student-run cafeteria on campus.
- To support the student in effectively managing their food expenses.


## 3.0 Features and Functionalities
The UniMeal web application aims to deliver an efficient, user-friendly, and centralized platform for food ordering across IIUM campus cafeterias. The key features and functionalities are as follows:

1. User Registration and Login
   - Secure user authentication system for students and cafeteria vendors.
   - User roles: Student (customer) and Vendor (cafeteria admin).

2. Cafeteria and Menu Browsing
   - Browse and view a list of all available cafeterias within the IIUM campus.
   - Access to daily menus, prices, food images, and descriptions.

3. Food Ordering System
   - Add items to the cart and place food orders directly from the selected cafeteria.
   - Real-time availability and estimated preparation time display.

4. Payment Integration
   - Multiple payment options: cash on pickup, online banking, or e-wallet integration.
   - Order receipt generation for records.

5. Order Tracking
   - Live status updates: Order placed → Preparing → Ready for pickup..

6) Cafeteria Dashboard (Vendor Panel)
   - Cafeteria vendors can manage their menus and receive orders.

7) Responsive Design
   - Optimised for desktop for easy access on a laptop.

## 4.0 Entity Relationship Diagram (ERD)

<img src="./images/erddiagram.png" width="60%">

## 5.0 Sequence Diagram 
<img src="./images/sequenced.jpg" width="60%">

## 6.0 Mockup (Figma link : https://www.figma.com/design/0xzzvD9iEsLNKpqIGoBAka/UNIMEAL?node-id=210-2&t=xwdXG33riCfDR0uM-1)
### Registration Page
#### Student Registration Page
<img src="./images/Register page student.png" width="60%">

#### Vendor Registration Page
<img src="./images/Register vendor.png" width="60%">

### Login page
<img src="./images/Login.png" width="60%">

### Homepage
<img src="./images/homepage.png" width="60%">

### Vendor Dashboard Page
<img src="./images/vendor dashboard.png" width="60%">

### Food Selection Page
<img src="./images/food details page.png" width="60%">

### Place Order Page
<img src="./images/ordering page.png" width="60%">

### Shipping Details Page
<img src="./images/shipping.png" width="60%">

### Delivery Option Page
<img src="./images/delivery.png" width="60%">

### Payment Method Page
<img src="./images/payment 1.png" width="60%">
<img src="./images/payment 2.png" width="60%">

### Track Order Page
<img src="./images/order tracking.png" width="60%">
<img src="./images/order tracking 2.png" width="60%">


## 7.0 References

Athuraliya, A., & Creately. (2022, December 12). Sequence Diagram Tutorial – Complete Guide with Examples. Creately. https://creately.com/guides/sequence-diagram-tutorial/

WhatisSequenceDiagram?(n.d.).https://www.visual-paradigm.com/guide/uml-unified-modeling-language/what-is-sequence-diagram/

# FINAL REPORT

## Project system captured screen and explaination

### Login page
<img src="./images/login page.jpg" width="60%">

This screenshot captures the Login Page for the UNIMEAL web application. It serves as the primary gateway for existing users to access their accounts. The page is cleanly divided into two main sections:

1. The Login Form
   
   On your left is the login form, this is the functional part of the page, designed for user interaction:
   - Credentials Input: Standard fields are provided for the user to enter their email and password. The         password field correctly masks the input for security.
   - Convenience Features: A "Remember me" checkbox is available to keep the user logged in, and a "Forgot       Password?" link provides a way to recover a lost account.
   - Primary Action: The large pink "LOG IN" button is the main call-to-action for users to submit their         credentials.
   - User Role Distinction: Crucially, the page provides two distinct paths for new users:
         - __Create an account__: This is for the primary user type, likely the students.
         - __Register as Vendor__: This separate button indicates that the system supports multiple user                                       roles, allowing cafeteria owners (vendors) to register and access a                                         different part of the application (like their dashboard).

2. Branding and Value Proposition
   
   On the right is the brand and value proposition, this section communicates the application's identity       and purpose:
     - __Slogan__: The catchy tagline, "Skip the Line, Not the Meal!!!", clearly and effectively                               communicates the core benefit of using UNIMEAL—convenience and time-saving.
     - __Logo__: The creative logo, featuring a burger wearing a graduation cap, cleverly targets its                        university student audience while representing its food-service nature.
     
     

### Registration Page
#### Student Registration Page
<img src="./images/Register page student.png" width="60%">

#### Vendor Registration Page
<img src="./images/Register vendor.png" width="60%">



### Homepage
<img src="./images/homepage.png" width="60%">

### Vendor Dashboard Page
<img src="./images/vendor dashboard.png" width="60%">

### Food Selection Page
<img src="./images/food details page.png" width="60%">

### Place Order Page
<img src="./images/ordering page.png" width="60%">

### Shipping Details Page
<img src="./images/shipping.png" width="60%">

### Delivery Option Page
<img src="./images/delivery.png" width="60%">

### Payment Method Page
<img src="./images/payment 1.png" width="60%">
<img src="./images/payment 2.png" width="60%">

### Track Order Page
<img src="./images/order tracking.png" width="60%">
<img src="./images/order tracking 2.png" width="60%">

## What is the challenge/difficulties to develop the application

1. __System Integration Challenges__
      - Multiple user roles (student, vendor, admin) require separate dashboards and permissions.
      - Synchronizing modules (e.g. order → shipping → payment) needs careful planning to avoid data                mismatches or delays.
        
2. __Backend & Database Complexity__
      - Ensuring relational database structure is normalized and scalable.
      - Preventing data redundancy and maintaining consistency across modules.
        
3. __Security & Authentication__
      - Ensuring secure login/registration (especially for payment-related pages).
        
4. __User Interface & Experience (UI/UX)__
      - Making sure the UI is responsive across devices.
      - Ensuring the checkout flow is smooth (especially for payment).
      - Preventing user drop-off due to confusing layouts or form overload.
        
5. __Testing & Bug Fixing__
      - Testing all edge cases.
      - Ensuring form validations work as expected.
      - Testing across browsers and devices for layout consistency.
        
6. __Team Collaboration & Coordination__
      - Merging code and avoiding Git conflicts when multiple people are working simultaneously.
        
7. __Time & Resource Constraints__
      - Limited time to finish features for each team member.
      - Balancing between design, coding, and testing phases



