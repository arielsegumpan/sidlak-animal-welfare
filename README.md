# Sidlak Animal Welfare Dog Adoption System 🐾

![FireShot Capture 037 - Sidlak Animal Welfare - SDAS - sidlak-animal-welfare test](https://github.com/user-attachments/assets/0a637989-a855-424a-a34e-058065c15f9b)

The **Sidlak Dog Adoption System** is a web application designed to streamline dog adoption processes. Built using the **TALL Stack** (TailwindCSS, Alpine.js, Laravel, and Livewire), it leverages **Laravel 11** for robust backend functionality and a modern user experience.

## 👨‍💻 Contributors

-   ✅ **Nonilo Aujero**
-   ✅ **Rey Oridina**
-   ✅ **Mini**
-   ✅ **Glydel Villareza**

---

## ✨ Features

-   🐶 **Dog Management**: Add, update, and list available dogs for adoption.
-   👤 **User Roles**: Role-based access control for admins and users.
-   📋 **Adoption Requests**: Real-time updates and tracking of adoption applications.
-   🌐 **TALL Stack**: Dynamic components and styling with TailwindCSS, Alpine.js, and Livewire.
-   🔐 **Secure Authentication**: Protect sensitive data with Laravel's built-in security features.

---

## ⚙️ Requirements

Ensure your environment meets these prerequisites:

-   **PHP**: >= 8.2
-   **Composer**
-   **Node.js**: >= 18.x
-   **Database**: MySQL or compatible
-   **Laravel**: Version 11
-   **luigel/laravel-paymongo**: >= 2.5
-   **flowframe/laravel-trend**: >= 0.3.0
-   **Git**

---

## 🛠️ Installation

Follow the steps below to set up the project locally:

### 1️⃣ Clone the Repository

```bash
git clone https://github.com/your-username/sidlak-dog-adoption-system.git
cd sidlak-dog-adoption-system
```

### 2️⃣ Install Dependencies (php and node.js)

```bash
composer install
npm install
```

### 3️⃣ Configure Environment

1. Copy .env.example to .env

```bash
cp .env.example .env
```

2. Update .env with your environment details

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

```bash
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=MAILTRAP_USERNAME
MAIL_PASSWORD=MAILTRAP_PASSWORD
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="sidlak-animal-welfare@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```

```bash
PAYMONGO_SECRET_KEY=YOUR_PAYMONGO_SECRET_KEY
PAYMONGO_PUBLIC_KEY=YOUR_PAYMONGO_PUBLIC_KEY
```

### 4️⃣ Generate Application Key

```bash
php artisan key:generate
```

### 5️⃣ Set Up the Database

-Run migrations:

```bash
php artisan migrate
```

-(Optional) Seed the database:

```bash
php artisan db:seed
```

### 6️⃣ Build Frontend Assets

-For development:

```bash
npm run dev
```

-For production:

```bash
npm run build
```

### 7️⃣ Start the Application

-Run migrations:

```bash
php artisan serve
```

Visit the app at http://localhost:8000.

### Storage link

To display images in the pages

```bash
rm public/storage

php artisan storage:link
```

## 🛠️ Installation

-   Ensure all dependencies are installed and compatible with your environment.
-   Verify database configurations in .env.
-   Fix file permissions if needed:

```bash
**php artisan serve**chmod -R 775 storage bootstrap/cache
```

## 🤝 Contributing

We welcome contributions! Feel free to:

1. Fork this repository.
2. Create a feature branch: git checkout -b feature/your-feature.

```bash
**git checkout -b feature/your-feature-name
```

3. Commit your changes: git commit -m 'Add your feature'.

```bash
**git commit -m "Add your feature description"
```

4. Push to the branch: git push origin feature/your-feature.

```bash
**git push origin feature/your-feature-name
```

5. Open a pull request.

## 📜 License

<p>This project is licensed under the MIT License. Feel free to use, modify, and distribute this software in compliance with the license.</p>

## 📧 Contact

For inquiries or support, feel free to:

-   Open an issue on this repository.
-   Email me at [ariel](arielsegumpan31@gmail.com).

## 📷 Screenshots

### Home

![SDAS - HOME](https://github.com/user-attachments/assets/bc23233e-7cb3-4b10-8a69-583dc8485e7e)

### Donation

![SDAS - DONATION](https://github.com/user-attachments/assets/84c619dc-b672-4b96-b527-da8c8bd9bb52)

### Volunteer

![SDAS - VOLUNTEER](https://github.com/user-attachments/assets/583ff046-c70f-4f62-8429-9313357e7f08)

### Blog

![SDAS - BLOG](https://github.com/user-attachments/assets/4579e9b9-fcbe-4daf-8864-3f9ec44c0638)

### Dog

![SDAS - DOGS](https://github.com/user-attachments/assets/6bffd003-aa9c-4834-bc15-75a7589c27f2)

## Admin Dashboard

![FireShot Capture 039 - Dashboard - Sidlak Animal Welfare - sidlak-animal-welfare test](https://github.com/user-attachments/assets/e021b57e-35b3-46ad-b44e-93936ea57bd7)

![FireShot Capture 040 - Dogs - Sidlak Animal Welfare - sidlak-animal-welfare test](https://github.com/user-attachments/assets/e8f6a20a-3ab3-4a50-af01-bc1b67f7e6ff)

![FireShot Capture 041 - Molly - Siberian Husky - Sidlak Animal Welfare - sidlak-animal-welfare test](https://github.com/user-attachments/assets/bcedfda1-cb3b-46c2-a8a2-4b9e27495bb6)

![FireShot Capture 049 - Homemade Dog Treat Recipes Your Pup Will Love - Sidlak Animal Welfare_ - sidlak-animal-welfare test](https://github.com/user-attachments/assets/616e9c9e-6f01-4819-8b5e-2f7503cec715)
