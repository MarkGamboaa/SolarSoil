# Render.com Deployment Guide for SolarSoil

## Quick Deployment Steps

1. **Sign up** at [render.com](https://render.com)
2. **Connect** your GitHub repository
3. **Create Web Service** - Render will auto-detect `render.yaml`
4. **Deploy** - Everything is configured automatically

## What's Configured

✅ **Web Service**: PHP application with proper build/start commands  
✅ **PostgreSQL**: Managed database service  
✅ **MongoDB**: Managed database service  
✅ **Environment Variables**: Auto-linked to databases  
✅ **Health Checks**: `/health.php` endpoint  

## File Structure
```
Your App URL/
├── / (Home page)
├── /pages/Home/ (Dashboard)
├── /pages/Shop/ (Plant shop)
├── /pages/Cart/ (Shopping cart)
├── /pages/Order/ (Orders)
├── /pages/Profile/ (User profile)
├── /pages/Admin/ (Admin panel)
└── /pages/About/ (About page)
```

## Cost
- **Free Tier**: 750 hours/month, 512MB RAM
- **Databases**: Free PostgreSQL and MongoDB included
- **Paid Plans**: Start at $7/month

## Support
- Docs: [docs.render.com](https://docs.render.com)
- Discord: [discord.gg/render](https://discord.gg/render) 