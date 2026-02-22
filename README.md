This is a small project using MySQL, PHP, and DDEV, which is a simplified admin panel for a school website.

It allows you to select classes and see the teachers, students, and subjects associated with each class.

To run it, you need to have a local development environment DDEV.

Here's how to run it:

1. Install DDEV (https://docs.ddev.com/en/stable/users/install/ddev-installation/).

If you are using Windows, you should use the corresponding WSL terminal in your IDE for the next steps.

2. Change the current working directory to the one where you want to download the project, for example, “cd /home/max-mustermann/”.

3. Use the following command to download the project: “git clone https://github.com/Denys-Hopka/School”.

4. Change the working directory to the project directory using the command “cd School”.

5. Run "ddev config --project-type=php --php-version=8.4 --database=mysql:8.4 --project-name=school".

6. Run "ddev snapshot restore school-class-management_20250820161915"

If you encounter difficulties with ports at this stage, restart your computer and continue with step 2, skipping step 3.

7. Use the “ddev list” command to display a list of running projects. You can view the project in your browser using the link next to the project name (“School”).

After examining the project, stop it using the command "ddev stop --unlist school"
