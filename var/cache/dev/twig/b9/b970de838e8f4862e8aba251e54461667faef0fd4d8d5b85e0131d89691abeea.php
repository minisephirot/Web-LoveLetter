<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c9a22f6232f523620a43cb73264546a4a7ebf73ef4ae88aaf7169e6d28ddd7bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc0469780b1b7d0030910e86938fe2ee155c2027b8d824a97a3ee8017067ca06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc0469780b1b7d0030910e86938fe2ee155c2027b8d824a97a3ee8017067ca06->enter($__internal_dc0469780b1b7d0030910e86938fe2ee155c2027b8d824a97a3ee8017067ca06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_dbb25fd20ad4261fdb3300d1a3d35e3507bf2eef6b5c4f6c32f8a92796a96992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb25fd20ad4261fdb3300d1a3d35e3507bf2eef6b5c4f6c32f8a92796a96992->enter($__internal_dbb25fd20ad4261fdb3300d1a3d35e3507bf2eef6b5c4f6c32f8a92796a96992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_dc0469780b1b7d0030910e86938fe2ee155c2027b8d824a97a3ee8017067ca06->leave($__internal_dc0469780b1b7d0030910e86938fe2ee155c2027b8d824a97a3ee8017067ca06_prof);

        
        $__internal_dbb25fd20ad4261fdb3300d1a3d35e3507bf2eef6b5c4f6c32f8a92796a96992->leave($__internal_dbb25fd20ad4261fdb3300d1a3d35e3507bf2eef6b5c4f6c32f8a92796a96992_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
